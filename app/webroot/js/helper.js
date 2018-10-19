function toggleDiv(divName, box) {

    if(box.checked) {
        //show div
        Effect.Grow(divName); return false;
    } else {
        //hide div
        Effect.Squish(divName); return false;
    }
}