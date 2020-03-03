/**
 * Created by jamesskywalker on 30/10/2016.
 */
var x = $("#cursor");
var i = 0;

var jobs = [{company:"Equiniti Data",title:"Software engineer",context:"Commercial position",link:"https://www.equinitidata.co.uk",imgSrc:"https://eqdatamedia.s3-eu-west-1.amazonaws.com/2019/03/eqdata.svg",
    keySkills: [
        "Maintaining and building features for a FinTech on-boarding platform",
        "Written in PHP 7+ within the Laravel framework",
        "Extensive use of the eloquent ORM to query a Postgres database",
        "Working with the Vue.js framework including Vuex",
        "Working in an agile way using Jira sprint software",
        "Collaborating with team via GitLab",
        "Unit testing with PHP Unit",
        "working alongside senior developers and DevOps",
        "Accurate estimation of jobs",
        "working alongside product manager to deliver and re-focus sprints accordingly"

    ]

},

    {company:"epraise",title:"epraise.co.uk - developer",context:"Commercial position",link:"https://www.epraise.co.uk",imgSrc:"pics/epraiseHomepage.png",
                keySkills:[
                        "Cloud hosted PHP member platform for schools",
                        "Designing,managing and implementing code from conception to production",
                        "App design and build with Android studio/Java",
                        "Creating seamless updates via AJAX",
                        "Extensive use of version control",
                        "Developing internal and external APIs",
                        "Consuming third party APIs",
                        "Understanding and maintaining SSO (such as O365,google,LDAP)",
                        "Regular development meetings with director to prioritise and plan next steps",
                        "Working directly with data controllers,processors and customers",
                        "Up-skilling staff including front line support and interns",
                        "Developing and designing user interface",
                        "Data analysis and GDPR compliance",
                        "Encouraging sales with online demos/customer support and recommendations of additional functionalities"

                ]
            },{company:"Toucan",title:"Toucan Property Services - rebuild",context:"Freelance",link:"http://www.toucanpropertyltd.co.uk",imgSrc:"pics/toucanHomepage.png",
                keySkills:[
                        "Bespoke Wordpress template",
                        "Developed knowledge of wordpress development and \'The loop\'",
                        "Learned to use and implement Wordpress CMS",
                        "Easily adaptable layout",
                        "Working to specific client brief",
                        "Working to timescale and budget",
                        "OOPHP and MySQL",
                        "Developed \'Welcome handbook\' for client on how to use Wordpress",
                        "Managing client to get content and copy"
                ]
            },{company:"EDIT",title:"PHP Developer - EDIT",context:"Commercial position",link:"https://eastdevon.it",imgSrc:"pics/edit.jpg",
                keySkills:[
                        "Updating and maintaining in-house software",
                        "Developing in-house MVC PHP solutions",
                        "Database design and implementation",
                        "Working to deadlines and client briefs",
                        "Working within the joomla framework",
                        "Linux server administration",
                        "Creation and monitoring of automated tasks",
                        "Integration of APIs",
                        "Writing content for new website",
                        "Meeting with clients",
                        "Managing invoicing and monitoring telecoms info"
                ]
            }, {company: "jamesmcarr.co.uk", title: "This Awesome Portfolio",context:"Shameless self promotion", link: "#tiles", imgSrc: "pics/folio.png",
                keySkills: ["Sleek clean design ",
                            "Hand coded jQuery/Javascript*",
                            "CSS3 transitions ",
                            "jQuery event listeners ",
                            "JavaScript animation ",
                            "DOM manipulation ",
                            "Mobile responsive and x-browser compatible",
                            "Utilising bootstrap grid framework",
                            "Regular injections of banter",
                            "* = currently being updated"]
            }, {company: "Upwork", title: "Freelance (various)",context:"Freelance", link: "https://www.upwork.com", imgSrc: "pics/upwork.png",
                keySkills: ["Various freelance jobs including hosting, PHP and front end builds",
                            "Managing client expectations",
                            "Following client brief",
                            "Delivering to targets",
                            "Feedback:<ul><li>5.00<sup>*</sup> Very responsive, quick and good quality work...</li>" +
                            "                          <li>5.00<sup>*</sup> Great work and very friendly person...</li>",
                            "* = star rating/5"]
                            }

            ];//this needs moving to an ajax call

//var for welcome fade in and animate
var N = 0;
var y = $('#header div');
var proj = $("#projects");
var langs = $("#languages");
var choice = $("#choice");

//var for trumps deck

var test = $("#test"),
    deck = $("#deck"),
    prof = $("#prof"),
    pers = $("#pers"),
    papp = $("#papp"),
    v= 0,
    pack = $("#pack");
//***************
$(document).ready(function(){
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-50
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $(document).keydown(function(keyPressed) {

        if (keyPressed.keyCode == 112) {
            if($("#projects").hasClass('hidden') && $("#languages").hasClass('hidden')){
                $("#projects").removeClass('hidden');
                $("#choice").html("F1: Projects");
                cycle("int");
            }else if(!$("#languages").hasClass('hidden') && $("#projects").hasClass('hidden') ){
                $("#projects").removeClass('hidden');
                $("#languages").addClass('hidden');
                $("#choice").html("F1: Projects");
                cycle("int");
            }


        }

        else if (keyPressed.keyCode ==113)

        {
            if($("#projects").hasClass('hidden') && $("#languages").hasClass('hidden')){
                $("#languages").removeClass('hidden');
                $("#choice").html("F2: Languages");
            }else if($("#languages").hasClass('hidden') && !$("#projects").hasClass('hidden') ){
                $("#projects").addClass('hidden');
                $("#languages").removeClass('hidden');
                $("#choice").html("F2: Languages");
            }


        }

    });

    setInterval(
        function cursor() {

            if(x.innerHTML ==="|"){
                x.innerHTML = " ";
            }else{
                x.innerHTML = "|";
            }
        },500
    );

});


function welcome(){
if (N<1){



    $('#links').removeClass('hidden');
    $("#land").removeClass('hidden').animate({height: '0px'}, 3000);
    $("#buzzword").addClass('paste');
    $('#title').addClass('paste');
    $('#tiles').addClass('tile').removeClass('hidden');

    $('#skills').removeClass('hidden');
    $('#personal').removeClass('hidden');
    $('#fin').removeClass('hidden');
    $('#footer').removeClass('hidden');
    $('#board').removeClass('hidden');

    if($('#title').hasClass('paste')) {
        $('#title').addClass('test');
        var i = 1;

        function stagger() {
            setTimeout(function () {
                if (i < 5) {
                    y[i].classList.add('fadecolor');
                    stagger();
                    i++;
                }
            }, 1000);
        }

        stagger();

    }
}N++;}


function option(x) {



    if (x == 112) {

        if ($(proj).hasClass('hidden') && $(langs).hasClass('hidden')) {
            $(proj).removeClass('hidden');
            $(choice).html("F1: Projects");
            cycle("int");
        } else if (!$(langs).hasClass('hidden') && $(proj).hasClass('hidden')) {
            $(proj).removeClass('hidden');
            $(langs).addClass('hidden');
            $(choice).html("F1: Projects");
            cycle("int");
        }
    } else if (x == 113) {
        if ($(proj).hasClass('hidden') && $(langs).hasClass('hidden')) {
            $(langs).removeClass('hidden');
            $(choice).html("F2: Languages");
        } else if ($(langs).hasClass('hidden') && !$(proj).hasClass('hidden')) {
            $(langs).removeClass('hidden');
            $(proj).addClass('hidden');
            $(choice).html("F2: Languages");

        }
    }
}

function cycle(direction){
    if(direction == "up" && i<jobs.length-1)i++;
    else if (direction == "down" && i>0)i--;
    else if (direction == "down" && i==0)i = jobs.length-1;
    else i=0;

    var selectedJob = jobs[i];
    $('#jobtit').text(selectedJob.title);
    $('#jobcont').text(selectedJob.context);
    $('#jobsite').html('<a href="' + selectedJob.link + '" target="_blank">' + (selectedJob.company == "jamesmcarr.co.uk" ? "Back to the top" : "Visit site" )  + '</a>');
    $('#jobpics img').attr("src",selectedJob.imgSrc);
    var skillsList = '';
    $(selectedJob.keySkills).each(function() {
        skillsList += "<li>" + this + "</li>";
    });
    $("#jobskills").html(skillsList);

}

function deal() {


    $(pack).addClass("hidden");
    $(deck).removeClass("hidden");

    var suits = [prof,pers,papp];

    function show (){
        setTimeout(function (){
            if(i<suits.length){

                $(suits[v]).removeClass("hidden");

                $(suits[v]).addClass("fadein");
                show();
                v++;
            }


        },1000);



    }show();



}




