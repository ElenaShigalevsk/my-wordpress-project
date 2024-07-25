document.addEventListener('DOMContentLoaded', () => {
    const photoBg = document.querySelector('.background-photo');
    const photoBgFinal = document.querySelector('.background-photo-final');
    const logo = document.querySelector('.logo_bg');
    const logoImg = document.querySelector('.logo img');
    const logoInner = document.querySelector('.logo');
    const textContainer = document.querySelector('.initial-text');
    const initialTextLines = document.querySelectorAll('.initial-text .text-line');
    const benefits = document.querySelector('.benefits');
    const benefitsItems = document.querySelectorAll('.benefits li');
    const preFinalText = document.querySelector('.pre-final-text');
    const finalText = document.querySelector('.final-text');
    const container = document.querySelector('.container');

    let currentStep = 0;

    function nextStep() {
        currentStep++;
        switch (currentStep) {
            case 1:
                // Step 1: Show background photo and logo
                logoImg.classList.add('show');
                break;
            case 2:
                // Step 2: Expand background under logo to 80% of parent block
                logo.style.width = '55%';
                logo.style.height = '60%';
                break;
            case 3:
                // Step 3: Expand background under logo to full block, show initial text lines
                logo.style.width = '100%';
                logo.style.height = '100%';
                initialTextLines.forEach((line, index) => {
                    setTimeout(() => {
                        line.classList.add('finalshow');
                        line.classList.add('show');
                    }, index * 200);
                });
                setTimeout(() => {
                    textContainer.classList.add('finalshow');
                    textContainer.classList.add('show');
                }, 1000);

                benefits.classList.add('finalshow');
                benefits.classList.add('show');
                break;
            case 4:
            case 5:
            case 6:
            case 7:
                // Steps 4-7: Show list items sequentially
                const index = currentStep - 4;
                setTimeout(() => {
                    benefitsItems[index].classList.add('finalshow');
                    benefitsItems[index].classList.add('show');
                }, index * 200);
                break;
            case 8:
                // Step 8: Hide everything except logo, background-photo and show pre-final text
                setTimeout(() => {
                    initialTextLines.forEach(line => {
                        line.classList.remove('finalshow');
                        line.classList.remove('show');
                    });
                    benefitsItems.forEach(item => {
                        item.classList.remove('finalshow');
                        item.classList.remove('show');
                    });
                    benefits.classList.remove('finalshow');
                    benefits.classList.remove('show');
                    textContainer.classList.remove('finalshow');
                    textContainer.classList.remove('show');
                    preFinalText.classList.add('finalshow');
                }, 500);
                setTimeout(() => {
                    preFinalText.classList.add('show');
                }, 1000);
                break;
            case 9:
                // Step 9: Hide pre-final text and show final text
                setTimeout(() => {
                preFinalText.classList.remove('finalshow');
                    preFinalText.classList.remove('show');
                    photoBg.classList.add('hide');
                    photoBgFinal.classList.add('show');
                }, 1000);
                break;
            case 10:
                // Step 10: Slide everything left by 50% of block width
                finalText.classList.add('finalshow');
                setTimeout(() => {
                    finalText.classList.add('show');
                    logo.classList.add('slide-left');
                    logoInner.classList.add('finalshow');
                }, 500);
                break;
        }
    }

    setInterval(nextStep, 2500);
});

