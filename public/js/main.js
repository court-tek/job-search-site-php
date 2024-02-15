window.onload = () => {
    // varialbles
    let ajaxButtons = document.querySelectorAll('.btn');
    let array = ['james', 'michael', 'johnny', 'mike'];

    // functions
    ajaxButtons.forEach(element => {
        element.addEventListener('click', (e) => {
            fetch(`http://localhost:3000/api/single_listing/${e.target.attributes.datalistingId.nodeValue}`)
            .then((response) => {
                if (!response.ok) {
                    console.log('ERRRRRR not Status: 200');
                    throw new Error(`Status Code Error: ${response.status}`);
                } else {
                    return response.json();
                }
            })
            .then(data => {
                const Object1 = data;
                // console.log(Object.values(Object1));
                const jobTitle = document.querySelector('.listings__job-title');
                const pCompanyName = document.querySelector('.listings__company-name');
                const pSalary = document.querySelector('.listings__salary');
                const pDetailsSalary = document.querySelector('.listings__details-salary');
                const listingLocation = document.querySelector('.listings__location');

                jobTitle.innerHTML = `${Object.values(Object1)[2]}`; 
                pCompanyName.innerHTML = `${Object.values(Object1)[6]}`;
                pSalary.innerHTML = `$${Object.values(Object1)[4]}`;
                pDetailsSalary.innerHTML = `$${Object.values(Object1)[4]}`;
                listingLocation.innerHTML = `${Object.values(Object1)[8]}, ${Object.values(Object1)[9]}`;
            })
            .catch((err) => {
                console.log('something went wrong with fetch!');
                console.log(err);
            });
        })
    });
}
