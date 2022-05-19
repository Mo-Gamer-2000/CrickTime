const batCardTemplate = document.querySelector("[data-bat-template]")
const batCardContainer = document.querySelector("[data-bat-cards-container]")
const searchInput = document.querySelector("[data-search]")

let users = []

searchInput.addEventListener("input", e => {
     const value = e.target.value.toLowerCase()
     users.forEach(user => {
          const isVisible = 
          user.name.toLowerCase().includes(value) ||
          user.tag.toLowerCase().includes(value) 
          user.element.classList.toggle("hide", !isVisible)
     })
})

fetch("../CrickTime/js/data.json")
.then(res => res.json())
.then(data => {
     users = data.map(user => {   
          const bat = batCardTemplate.content.cloneNode(true).children[0]
          const header = bat.querySelector("[data-header]")
          const body = bat.querySelector("[data-body]")
          header.textContent = user.name
          body.textContent = user.tag
          batCardContainer.append(bat)
          return {name: user.name, tag: user.tag, element: bat }
     })
})