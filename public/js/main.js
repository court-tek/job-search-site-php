window.onload = () => {
    // varialbles
    let listingCard = document.querySelectorAll('.listings__card-container');

    // functions & loops

    // adds the border active class and removes it when another eloment is clicked
    for (let i = 0; i < listingCard.length; i++) {
        listingCard[i].addEventListener("click", function () {
      
          listingCard.forEach(element => element.classList.remove("listings--card-active"))
      
          listingCard[i].classList.add("listings--card-active");
        });
    }

    // fetch job listing data
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
                console.log(Object.values(Object1));
                const jobTitle = document.querySelector('.listings__right-job-title');
                const companyName1 = document.querySelector('.listings__right-company-name');
                const companyName2 = document.querySelector('.listings__right-company');
                const workEnv = document.querySelector('.listings__right-work-environment');
                const listingLocation = document.querySelector('.listings__right-location');
                const jobDescription = document.querySelector('.listings__right-job-description');
                const jobRequirements = document.querySelector('.listings__right-requirements');
                const jobSkills = document.querySelector('.listings__right-skills-tags');
                const jobBenefits = document.querySelector('.listings__right-benefits');
                const tags = document.querySelector('.listings__right-tags');
                let str1 = Object.values(Object1)[5];
                const split_string = str1.split(" ");
                

                //Output = ["Hire", "the", "top", "1%", "freelance", "developers"]
                jobTitle.innerHTML = `${Object.values(Object1)[2]}`; 
                companyName1.innerHTML = `${Object.values(Object1)[6]}`;
                listingLocation.innerHTML = `${Object.values(Object1)[8]}, ${Object.values(Object1)[9]}`;
                workEnv.innerHTML = `${Object.values(Object1)[15]}`;
                jobDescription.innerHTML = `${Object.values(Object1)[3]}`;
                companyName2.innerHTML = `${Object.values(Object1)[6]}`;
                jobRequirements.innerHTML = `${Object.values(Object1)[12]}`;
                jobSkills.innerHTML = `${Object.values(Object1)[5]}`;
                jobBenefits.innerHTML = `${Object.values(Object1)[13]}`;
                split_string.forEach(string => {
                    const tags = document.querySelector('.listings__right-tags');
                    console.log(string);
                })
            })
            .catch((err) => {
                console.log('something went wrong with fetch!');
                console.log(err);
            });
        })
    });
}
