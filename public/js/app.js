function addClassHomeSpanned(e) {
    let element = document.getElementById(e.target.id);

    let container = element.querySelector('.containerCard')


    let children = element.parentElement.childNodes;
    if ([...element.classList].includes("homeSpanned")) {
        element.classList.remove("homeSpanned")

        container.style.display = "none"
    } else {
        try {
            container.style.display = "flex"
        } catch (error) {

        }
        for (let i = 0; i < children.length; i++) {
            try {
                if (children[i].style.width < '30%' && children[i] != element) {
                    children[i].querySelector('.containerCard').style.display = 'none';
                }
            } catch (error) {

            }
            try {

                children[i].classList.remove("homeSpanned")

            } catch (error) {

            }
        }
        element.classList.add("homeSpanned");
    }

}