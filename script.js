//middle section js
let page= 0;
const storiesPerPage =6;

function scrollStories(direction){
    const track = document.getElementById("storiesTrack");
    const storyWidth = 85;
    const totalStories = track.children.length;
    const maxPage = Math.ceil(totalStories/storiesPerPage)-1;

    page += direction;

    if(page<0) page = 0;
    if(page > maxPage) page = maxPage;

    track.style.transform=`translateX(-${page*storiesPerPage*storyWidth}px)`;
}