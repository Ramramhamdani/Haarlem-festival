var data = [];

function clearData(){
    var components = document.getElementById('components');
    components.innerHTML = "";
}
 


function createHeader(header, place) {
    var hall = header.children[1].firstElementChild;
    hall.innerHTML = place;
    return place;
}
function createEvent(item,id,startTime, endTime, date, name, price, numTickets, img, place) {

    //var event = level == 1 ? item.children[0] : item.children[1];
    var event = item;
    var poster = event.firstElementChild.firstElementChild;
    poster.src = img;
    var title = event.children[1].firstElementChild.firstElementChild;
    title.innerHTML = name;
    var info = event.children[1].children[1].firstElementChild;
    info.innerHTML = startTime+" - "+endTime+"<br> €"+price+"<br>"+place;
    return event;
}
 function generatePlace(hall) {
    secondHeader = hall;
 }

function generateData(id,startTime, endTime, date, name, price, numTickets, img, place) {
    var row = {
        id:id,
        startTime:startTime,
        endTime:endTime,
        date:date,
        name:name,
        price:price,
        numTickets:numTickets,
        img:img,
        place:place
    };
    data.push(row);
}
function GetDefualt() {
    //get the defualt elements so it can be used after it is cleared
    var item = document.getElementById('firstItem');
    var item2 = document.getElementById('secondItem');
    var item3 = document.getElementById('thirdItem');
    event1 = document.getElementById("event1");
    event2 = document.getElementById("event2");
    clearData();
    defualt1 = item;
    defualt2 = item2;
    defualt3 = item3;
    
}
function viewDefualt() {
    //bring the elements from the db fill it in the premade elements "GetDefualt()"
    var item = defualt1;
    var item2 = defualt2;
    var item3 = defualt3;

    clearData();

    if (data[0] != null) {
        var firstEvent = createEvent(item, data[0].Poster, data[0].Title, data[0].Time,1);
        item.children[0] = firstEvent;
    }
    if (data[1] != null) {
        var SecondEvent =  createEvent(item,data[1].Poster,data[1].Title,data[1].Time,2);
        item.children[1] = SecondEvent;
    }
    
    
    document.getElementById('components').appendChild(item);
}
function viewPageContent() {
    
    clearData();

    for (let i = 0; i < data.length; i++) {
        
        var first = document.createElement("div");
        first.className = "item";
        first.id = "firstItem";
        

        var div = document.createElement("div");
        div.id = "event";
        div.className = "event";
        //first.appendChild(div);

        //div event
        var imgdiv = document.createElement("div");
        imgdiv.className = "poster";
        div.appendChild(imgdiv);
        //img
        var img = document.createElement("img");
        img.src = data[i].img;
        imgdiv.appendChild(img);
        //content container
        var content = document.createElement("div");
        content.className = "content";
        div.appendChild(content);
        //band name div
        var eventTitleDiv = document.createElement("div");
        eventTitleDiv.className = "eventTitle";
        content.appendChild(eventTitleDiv);
        //band name p
        var eventTitle = document.createElement("p");
        eventTitle.innerHTML = data[i].Title;
        eventTitleDiv.appendChild(eventTitle);
        //info div
        var infodiv = document.createElement("div");
        infodiv.className = "info";
        content.appendChild(infodiv);
        //info
        var info = document.createElement("p");
        info.innerHTML = data[i].startTime+" - "+data[i].endTime+"<br> €"+data[i].price;
        infodiv.appendChild(info);
        //button div
        var btndiv = document.createElement("div");
        btndiv.className = "bookButton";
        content.appendChild(btndiv);
        //create form
        var form = document.createElement("form");
        form.method = "POST";
        form.action = "index.php";
        btndiv.appendChild(form);
        //input
        var hiddenId = document.createElement("input");
        hiddenId.name = "hiddenSe";
        hiddenId.type = "hidden";
        hiddenId.value = data[i].id;
        form.appendChild(hiddenId);
        //book btn
        if (data[i].price != 0) {
            var btn = document.createElement("button");
            btn.type = "submit";
            btn.name = "checkoutBtn";
            btn.innerHTML = "Book";
            form.appendChild(btn);    
        }
        
        var eventview = createEvent(div, data[i].id,data[i].startTime, data[i].endTime, data[i].date, data[i].name, data[i].price, data[i].numTickets, data[i].img,data[i].place);
        
        //div.children[0];
        first.appendChild(eventview);
        document.getElementById('components').appendChild(first);
    }
    

}

