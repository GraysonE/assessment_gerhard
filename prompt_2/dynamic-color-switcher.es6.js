document.body.onload = () => {

    const redBtn = document.querySelector('#toggle-red');
    const blueBtn = document.querySelector('#toggle-blue');
    const greenBtn = document.querySelector('#toggle-green');

    let selected_color = getCookie('color');

    if ( selected_color != 0 ) {
        document.documentElement.style.setProperty('--main-hue', selected_color);
    }

    redBtn.addEventListener('click', (e) => {
        selected_color = 360;
        document.documentElement.style.setProperty('--main-hue', selected_color);
        setCookie('color', selected_color, 7);
    })

    blueBtn.addEventListener('click', (e) => {
        selected_color = 240;
        document.documentElement.style.setProperty('--main-hue', selected_color);
        setCookie('color', selected_color, 7);
    })

    greenBtn.addEventListener('click', (e) => {
        selected_color = 120;
        document.documentElement.style.setProperty('--main-hue', selected_color);
        setCookie('color', selected_color, 7);
    })
}