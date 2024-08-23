document.addEventListener('DOMContentLoaded', function () {
  // Handle Scroll
  const handleScroll = () => {
    const header = document.querySelector('.header')
    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) {
        header.classList.add('sticky')
      } else {
        header.classList.remove('sticky')
      }
    })
  }
  handleScroll()

  // Handle Menubar
  const handleMenuBar = () => {
    const menu = document.querySelector('#handleMenubar')
    const nav = document.querySelector('#menubar')
    menu.addEventListener('click', () => {
      nav.classList.toggle('active')
    })
  }
  handleMenuBar()
})
