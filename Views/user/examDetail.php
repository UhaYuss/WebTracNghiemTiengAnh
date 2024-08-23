<?php
$danhSachCauHoi = include('./Controller/DanhSachCauHoi.php');
$isSubmitted = isset($_GET['submitted']) && $_GET['submitted'] == 'true';

include './Controller/Authencation.php';

if (!isset($_SESSION['remaining_time'])) {
  $_SESSION['remaining_time'] = $danhSachCauHoi[0]['ThoiGianLamBai'] * 60;
}
?>

<section>
  <a href="#destination">
    <div id="countdown" class="fixed right-10 bg-white border border-red-500 p-3 rounded-lg"></div>
  </a>
  <form action="./Controller/submit_answers.php" method="post" id="exam-form">
    <input type="hidden" name="maBaiLam" value="<?php echo htmlspecialchars($_GET['MaBaiLam']); ?>">
    <input type="hidden" name="submitted" value="true">
    <?php $questionNumber = 1; ?>
    <?php foreach ($danhSachCauHoi as $cauHoi) : ?>
      <div class="question w-[85%]">
        <h2><?php echo "Câu $questionNumber. " . htmlspecialchars($cauHoi['NoiDung']); ?></h2>
        <div class="answers">
          <ul>
            <?php
            $answers = [
              $cauHoi['DapAnDung'],
              $cauHoi['DapAnSai1'],
              $cauHoi['DapAnSai2'],
              $cauHoi['DapAnSai3']
            ];
            usort($answers, function ($a, $b) {
              return strcmp($a, $b);
            });
            foreach ($answers as $index => $answer) :
              $answerId = $index + 1;
            ?>
              <li>
                <input class="cursor-pointer" type="radio" id="answer_<?php echo $cauHoi['MaCauHoi']; ?>_<?php echo $answerId; ?>" name="answer_<?php echo $cauHoi['MaCauHoi']; ?>" value="<?php echo htmlspecialchars($answer); ?>">
                <label class="cursor-pointer" for="answer_<?php echo $cauHoi['MaCauHoi']; ?>_<?php echo $answerId; ?>"><?php echo htmlspecialchars($answer); ?></label>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php $questionNumber++; ?>
    <?php endforeach; ?>

    <button id="destination" type="submit" class="bg-blue-600 text-white p-2 px-16 rounded-md">Gửi</button>
  </form>
</section>

<script>
  let totalTime = sessionStorage.getItem('remaining_time') || <?php echo $_SESSION['remaining_time']; ?>;
  const countdownElement = document.getElementById('countdown');

  function countdown() {
    const minutes = Math.floor(totalTime / 60);
    let seconds = totalTime % 60;
    countdownElement.innerHTML = `${minutes} phút ${seconds} giây`;

    if (seconds <= 50 && minutes === 0) {
      countdownElement.classList.add('animation-warning');
    } else {
      countdownElement.classList.remove('animation-warning');
    }

    if (totalTime <= 0) {
      clearInterval(timer);
      countdownElement.innerHTML = 'Hết thời gian';
      document.querySelector('form').submit();
    } else {
      totalTime--;
      sessionStorage.setItem('remaining_time', totalTime);
    }
  }
  countdown();
  const timer = setInterval(countdown, 1000);

  document.querySelectorAll('input[type="radio"]').forEach(radio => {
    radio.addEventListener('change', (e) => {
      localStorage.setItem(e.target.name, e.target.value);
    });
  });

  window.addEventListener('load', () => {
    document.querySelectorAll('input[type="radio"]').forEach(radio => {
      if (localStorage.getItem(radio.name) === radio.value) {
        radio.checked = true;
      }
    });

    const isSubmitted = <?php echo json_encode($isSubmitted); ?>;
    if (isSubmitted) {
      document.querySelectorAll('input[type="radio"]').forEach(radio => {
        radio.disabled = true;
      });
      document.getElementById('destination').disabled = true;
    }
  });

  document.getElementById('exam-form').addEventListener('submit', () => {
    localStorage.clear();
    sessionStorage.removeItem('remaining_time');
  });
</script>