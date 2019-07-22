function toggler(evt, postType) {


    // Declare all variables
    var i, tabcontent, tablinks;
    if(postType === 'All'){
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove('active')
        }

        let x = document.getElementsByClassName('feed-toggle');
        for (i = 0; i < x.length; i++) {
            x[i].style.display="block";
        }
    }
    else{
        tabcontent = document.getElementsByClassName("feed-toggle");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove('active')
        }
        let x = document.getElementsByClassName(postType);
        for (i = 0; i < x.length; i++) {
            x[i].style.display="block";
        }
        evt.currentTarget.classList.add('active')


    }


}