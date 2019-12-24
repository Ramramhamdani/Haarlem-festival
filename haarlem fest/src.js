var data = [];

function clearData(){
    var components = document.getElementById('components');
    components.innerHTML = "";
}

function createEvent(item,source,Title,Info,level){

    var event = level == 1 ? item.children[0] : item.children[1];
    var poster = event.firstElementChild.firstElementChild;
    poster.src = source;
    var title = event.children[1].firstElementChild.firstElementChild;
    title.innerHTML = Title;
    var info = event.children[1].children[1].firstElementChild;
    info.innerHTML = Info;
    return event;
}

function generateData(title,time,poster){
    var row = {
        Title:title,
        Time:time,
        Poster:poster
    }
    data.push(row);
}

function viewSundayContent(){

    var item = document.getElementById('firstItem');
    //var item2 = document.getElementById('secondItem');

    clearData();

    console.log("data",data);
    var firstEvent = createEvent(item,data[0].Poster,data[0].Title,data[0].Time,1);
    var SecondEvent =  createEvent(item,data[1].Poster,data[1].Title,data[1].Time,2);

    //var firstEvent1 = createEvent(item2,"assets/orange.jpg","Orange","17:00 - 22:00",1);
    //var SecondEvent2 =  createEvent(item2,"assets/orange.jpg","Rasheed","13:00 - 22:00",2);

    item.children[0] = firstEvent;
    item.children[1] = SecondEvent;

    

    //item2.children[0] = firstEvent1;
    //item2.children[1] = SecondEvent2;

    document.getElementById('components').appendChild(item);
    //document.getElementById('components').appendChild(item2);
}

function viewTuesdayContent(){
    var item = document.getElementById('item');
    clearData();

    var firstEvent = createEvent(item,"assets/orange.jpg","Orange","17:00 - 22:00",1);
    var SecondEvent =  createEvent(item,"assets/orange.jpg","Rasheed","13:00 - 22:00",2);

    item.children[0] = firstEvent;
    item.children[1] = SecondEvent;

    document.getElementById('components').appendChild(item);

}
