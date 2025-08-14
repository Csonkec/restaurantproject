const currentDate = document.querySelector(".current-date");
const daysTag = document.querySelector(".days");
const prevNextIcons = document.querySelectorAll(".header-icons span");

let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();


const months = ["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"];

const renderCalendar = () =>{

    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay();
    let lastDateofMonth = new Date(currYear, currMonth + 1 , 0).getDate();
    let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
    let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay()
    let liTag = "";
    let daysCount = -1;
    let daysCount2 = 0;

    for (let i = firstDayofMonth; i > 0; i--) {
        daysCount++;
        daysCount2++;
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        let isToday = ""; 
        daysCount++;
        daysCount2++;

        if(daysCount % 7 != 0 && daysCount2 % 7 != 0){
            if(i === date.getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear()){
            isToday = "active";
            }
            if(date.getDate() > i && currMonth == date.getMonth()){
                liTag += `<li class="inactive">${i}</li>`;
            }
            else{
                liTag += `<li class="${isToday}">${i}</li>`;
            }   
        }
        else{
            liTag += `<li class="inactive">${i}</li>`;
        } 
    }

    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i -lastDayofMonth + 1}</li>`;
    }

    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
}
renderCalendar();

prevNextIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 === date.getMonth() - 1 ? currMonth : currMonth-1 : currMonth + 1;  

        if(currMonth < 0 || currMonth > 11){
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        }else{
            date = new Date();
        }
        renderCalendar(); 
    })
});