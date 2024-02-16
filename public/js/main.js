window.onload = () => {
    // varialbles
    let listingCard = document.querySelectorAll('.listings__card-container');
    let heading = document.querySelector('.search__heading');
    let array = ['james', 'michael', 'johnny', 'mike'];

    
    // listingCard.forEach(element => {
    //     element.addEventListener('click', function(e) {
    //         console.log(element.dataset.listingid);
    //         console.log(e);
    //     })
    // })
    // functions
    listingCard.forEach(element => {
        element.addEventListener('click', (e) => {
            const id = element.dataset.listingid;
            // console.log(e.target.attributes.datalistingId.nodeValue);
            fetch(`http://localhost:3000/api/single_listing/${id}`)
            .then((response) => {
                if (!response.ok) {
                    console.log('ERRRRRR not Status: 200');
                    throw new Error(`Status Code Error: ${response.status}`);
                } else {
                    return response.json();
                }
            })
            .then(data => {
                console.log(data);
                const Object1 = data;
                // // console.log(Object.values(Object1));
                const jobTitle = document.querySelector('.listings__right-job-title');
                // const companyName = document.querySelector('.listings__right-company-name');
                // const pSalary = document.querySelector('.listings__right-salary');
                // const pDetailsSalary = document.querySelector('.listings__right-details-salary');
                // const listingLocation = document.querySelector('.listings__right-location');

                jobTitle.innerHTML = `${Object.values(Object1)[2]}`; 
                // companyName.innerHTML = `${Object.values(Object1)[6]}`;
                // pSalary.innerHTML = `$${Object.values(Object1)[4]}`;
                // pDetailsSalary.innerHTML = `$${Object.values(Object1)[4]}`;
                // listingLocation.innerHTML = `${Object.values(Object1)[8]}, ${Object.values(Object1)[9]}`;
            })
            .catch((err) => {
                console.log('something went wrong with fetch!');
                console.log(err);
            });
        })
    });
}
