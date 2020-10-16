new Vue
({
    el: '#jobList',
    data: {
        jobList: [{
            id: 1,
            title: 'Java Developper',
            description: 'Come be a part of an extremely talented and passionate team developing next-generation web, mobile and tablet applications for world-renowned organizations. This is a fully-remote position.',
            wage: '1700',
            place: 'San Francisco',
            schedule: '35h',
            company: 'IBM'
        },
            {
                id: 2,
                title: 'Full Stack Developper',
                description: 'We are seeking a Junior Full Stack Developer to join our team. In this role, your strong analytic skills and ability to solve challenges with technology will make an impact on our government clients critical missions, improving millions of lives across the globe.'
            },
            {
                id: 3,
                title: '.NET Developper',
                description: 'We are looking for full stack enthusiast who enjoys building products that solve big problems, delight customers and get things done on a collaborative team.'
            },
            {
                id: 4,
                title: 'Software Developper',
                description: 'We are looking for a proven Lead Software Developer to join one of two high-profile projects for name brand Utah clients. These are both unique and exciting opportunities to build software for industry-leading companies.'
            },
            {
                id: 5,
                title: 'Python Developper',
                description: 'We are looking for a developer who has a passion for providing solutions, can make strategic decisions between requests and requirements and takes pride in their work.'
            },
            {
                id: 6,
                title: 'Ruby Developper',
                description: 'Be part of the team which has delivered over $500 Million dollars in refunds and savings to clients, and join us as we march toward One Billion dollars!'
            },
            {
                id: 7,
                title: 'C# Developper',
                description: 'Senior Level, is the lead developer. This person must have substantial technical acumen, this Individual must also have strong verbal and written communication skills with the ability to effectively convey Information to audiences of varying technical aptitude and organizational levels. This Individual should have the ability to lead people, gain consensus and foster teamwork among various technical and business groups.'
            },
            {
                id: 8,
                title: 'C++ Developper',
                description: '8+ years professional software engineering experience in developing and debugging embedded software, preferably for Android/Linux.'
            }
        ]
    },
    methods: {
        expandJob: function (job) {
            $(".card:nth-child(" + job.id + ")").toggleClass("active-card")
            $(".card:nth-child(" + job.id + ") > div.card-action").toggleClass("active-button")
            $(".card:nth-child(" + job.id + ") > div.card-content > p ").toggleClass("active-description")
            $(".card:nth-child(" + job.id + ") > div.card-content > #job-informations[class='active-informations']").toggle()
        }
    }
})

$(document).ready(function () {
    $('.modal').modal();
    $("#job-informations[class='active-informations']").hide()
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.fixed-action-btn').click(function() {   // TODO Afficher bouton uniquement quand on a déjà scrollé
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
});
/*
$("#submit").submit(function(event)
{
    event.preventDefault();

    $.ajax
    ({
        type: 'POST',
        url: "127.0.0.1:8000/data",
        data: $(this).serialize(),
        success: function(data)
        {
            $(this).append(data+"<br/>");
            console.log(data);
            if(window.Notification)
            {
                if(Notification.permission === "granted")
                {
                    var notify = new Notification('Email.',
                        {
                            body: data
                        });
                }else if(Notification.permission === "denied") alert("Merci d'accepter les notifications")
            }
        },
    });
}); */

// $("#dataRegister").on("submit", function(event)


