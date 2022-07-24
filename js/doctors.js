const searchBar = document.querySelector("#search"),
 searchBtn= document.querySelector("#button");
userList = document.querySelector(".users-list");

//  searchBtn.addEventListener("click",()=>{
//     searchBar.classList.toggle("active");
//     searchBar.focus();
//     searchBtn.classList.toggle("active");
//  })

//  searchBar.onkeyup = ()=>{
//     let searchTerm= searchBar.value;
//     if (searchTerm != ""){
//         searchBar.classList.add("active")
//     }
//     else{
//         searchBar.classList.remove("active")
//     }
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST","searcTermDoc.php",true)
//     xhr.onload=()=>{
//         if(xhr.readyState === XMLHttpRequest.DONE){
//             if(xhr.status === 200){
//                 let data = xhr.response
//                 console.log(data)
//                 // userList.innerHTML=data;
//             }
//         }
//     }
//     xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded")
//     xhr.send("searchTerm="+ searchTerm)
//  }
 
 setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET","doctor-chat.php",true)
    xhr.onload=()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // if(!searchBar.classList.contains("active")){
                    userList.innerHTML=data;
                // }
            }
        }
    }
    xhr.send();
 },500)