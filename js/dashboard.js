const countEls = document.querySelectorAll(".count");

let countEl0 = parseInt(countEls[0].textContent.trim());
let countEl1 = parseInt(countEls[1].textContent.trim());
let countEl2 = parseInt(countEls[2].textContent.trim());

function countEffect(targetCount, element) {
    let count = 0;
    if(targetCount>0){
        const intervalId = setInterval(() => {
            element.textContent = count;
       
            
            if (count > targetCount) {
                clearInterval(intervalId);
            }
            
            count++;
        }, 1);
    }

}

countEffect(countEl0, countEls[0]);
countEffect(countEl1, countEls[1]);
countEffect(countEl2, countEls[2]);
