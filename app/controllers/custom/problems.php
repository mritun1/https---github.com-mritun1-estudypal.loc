<?php 
class APP_CUSTOM_PROBLEMS{
    public static function category($query,$search = null){
        $return = false;
        $categories = array(
            "Coding" => array(
                    "img" => "/assets/icons/coding.png", 
                    "title" => "Coding", 
                    "des" => "(HTML,CSS,PHP...)",
                    "href" => "/list-problem/Coding"
                ),
            "Financial" => array(
                    "img" => "/assets/icons/financial-profit.png", 
                    "title" => "Financial", 
                    "des" => "(Business,Personal...)",
                    "href" => "/list-problem/Financial"
                ),
            "Health" => array(
                    "img" => "/assets/icons/healthcare.png", 
                    "title" => "Health&Diseases", 
                    "des" => "(Exercise,Diet...)",
                    "href" => "/list-problem/Health"
                ),
            "Motivation" => array(
                    "img" => "/assets/icons/motivation.png", 
                    "title" => "Motivation&Lifestyle", 
                    "des" => "(Depression,Change Life...)",
                    "href" => "/list-problem/Motivation"
                ),
            "Relationships" => array(
                    "img" => "/assets/icons/relationship.png", 
                    "title" => "Relationships", 
                    "des" => "(BF/GF,Marriage...)",
                    "href" => "/list-problem/Relationships"
                ),
            "Career" => array(
                    "img" => "/assets/icons/career-choice.png", 
                    "title" => "Career&Jobs", 
                    "des" => "(interview,preparation...)",
                    "href" => "/list-problem/Career"
            ),
            "Security" => array(
                "img" => "/assets/icons/insurance.png", 
                "title" => "Cyber Securities", 
                "des" => "(Cyber crime, fraud calls, hacking,...)",
                "href" => "/list-problem/Security"
            ),
            "Mystery" => array(
                "img" => "/assets/icons/unknown.png", 
                "title" => "Mystery, UFO & GOD", 
                "des" => "(UFO sighting, Gods, ancient aliens,...)",
                "href" => "/list-problem/Mystery"
            )
          );

        if($query == 'all'){
            $return = $categories;
        }
        if($query == "single"){
            $return = $categories[$search];
        }
        return $return;
    }

    public static function topics($query,$search = null){
        $return = false;
        $data = array(
            "Coding" => array(
                    "html-css" =>array(
                        "img" => "/assets/icons/topics/html.png",
                        "title" => "HTML & CSS",
                        "des" => "Discuss about HTML,CSS,SCSS,We design,etc.",
                        "url" => "/all-ask/Coding/html-css"
                    ),
                    "php" =>array(
                        "img" => "/assets/icons/topics/php.png",
                        "title" => "PHP coding",
                        "des" => "Discuss about PHP programming languages",
                        "url" => "/all-ask/Coding/php"
                    ),
                    "js" =>array(
                        "img" => "/assets/icons/topics/javascript.png",
                        "title" => "JavaScript languages",
                        "des" => "Discuss about JavaScript, jQuery, etc.",
                        "url" => "/all-ask/Coding/js"
                    ),
                    "mysql" =>array(
                        "img" => "/assets/icons/topics/mysql.png",
                        "title" => "MySQL",
                        "des" => "Discuss about MySQL,MySQLi,phpmyadmin database, etc.",
                        "url" => "/all-ask/Coding/mysql"
                    ),
                    "website_dev" =>array(
                        "img" => "/assets/icons/topics/ux.png",
                        "title" => "Website Development",
                        "des" => "Discuss about Website Development, Designing, etc.",
                        "url" => "/all-ask/Coding/website_dev"
                    ),
                    "others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others Tech",
                        "des" => "Discuss about hardware, software, etc.",
                        "url" => "/all-ask/Coding/others"
                    )
                ),
            "Financial" => array(
                    "fin-business" =>array(
                        "img" => "/assets/icons/topics/business.png",
                        "title" => "Business",
                        "des" => "Discuss about Finance, Business, earning money, etc.",
                        "url" => "/all-ask/Financial/fin-business"
                    ),
                    "fin-personal" =>array(
                        "img" => "/assets/icons/topics/man.png",
                        "title" => "Personal",
                        "des" => "Discuss about personal financial problems.",
                        "url" => "/all-ask/Financial/fin-personal"
                    ),
                    "fin-loan" =>array(
                        "img" => "/assets/icons/topics/loan.png",
                        "title" => "Loans",
                        "des" => "Discuss about Loan, lender, etc. problems.",
                        "url" => "/all-ask/Financial/fin-loan"
                    ),
                    "fin-startups" =>array(
                        "img" => "/assets/icons/topics/startup.png",
                        "title" => "Startups",
                        "des" => "Discuss about Startups, new business, etc. problems.",
                        "url" => "/all-ask/Financial/fin-startups"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about others, etc. problems.",
                        "url" => "/all-ask/Financial/Others"
                    )
                ),
            "Health" => array(
                    "health-exercise" =>array(
                        "img" => "/assets/icons/topics/exercise.png",
                        "title" => "Exercises",
                        "des" => "Discuss about Exercise, yoga, sports, fitness, etc.",
                        "url" => "/all-ask/Health/health-exercise"
                    ),
                    "health-diets" =>array(
                        "img" => "/assets/icons/topics/diet.png",
                        "title" => "Diets",
                        "des" => "Discuss about Diets, Foods, healthy, etc.",
                        "url" => "/all-ask/Health/health-diets"
                    ),
                    "health-medicine" =>array(
                        "img" => "/assets/icons/topics/pills.png",
                        "title" => "Medicine",
                        "des" => "Discuss about Medicine, treatments, etc.",
                        "url" => "/all-ask/Health/health-medicine"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about Others, etc.",
                        "url" => "/all-ask/Health/Others"
                    )
                ),
            "Motivation" => array(
                    "life-depression" =>array(
                        "img" => "/assets/icons/topics/depression.png",
                        "title" => "Depression",
                        "des" => "Discuss about Depression, anxiety, etc. problems.",
                        "url" => "/all-ask/Motivation/life-depression"
                    ),
                    "life-change" =>array(
                        "img" => "/assets/icons/topics/life-insurance.png",
                        "title" => "Change Life",
                        "des" => "Discuss about changing lifestyle, etc.",
                        "url" => "/all-ask/Motivation/life-change"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about Others, etc.",
                        "url" => "/all-ask/Motivation/Others"
                    )
                ),
            "Relationships" => array(
                    "relation-bfgf" =>array(
                        "img" => "/assets/icons/topics/love-bird.png",
                        "title" => "GF & BF",
                        "des" => "Discuss about Girl friend, Boy friend, etc. problems.",
                        "url" => "/all-ask/Relationships/relation-bfgf"
                    ),
                    "relation-marriage" =>array(
                        "img" => "/assets/icons/topics/couple.png",
                        "title" => "Marriage",
                        "des" => "Discuss about Marriage, etc.",
                        "url" => "/all-ask/Relationships/relation-marriage"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about Others, etc.",
                        "url" => "/all-ask/Relationships/Others"
                    )
                ),
            "Career" => array(
                    "job-prepare" =>array(
                        "img" => "/assets/icons/topics/preparation.png",
                        "title" => "Job preparation",
                        "des" => "Discuss about job preparation, etc. problems.",
                        "url" => "/all-ask/Career/job-prepare"
                    ),
                    "job-interviews" =>array(
                        "img" => "/assets/icons/topics/interview.png",
                        "title" => "Interviews",
                        "des" => "Discuss about Interviews, etc.",
                        "url" => "/all-ask/Career/job-interviews"
                    ),
                    "job-experiences" =>array(
                        "img" => "/assets/icons/topics/experience.png",
                        "title" => "Job experiences",
                        "des" => "Discuss about Job experiences, etc.",
                        "url" => "/all-ask/Career/job-experiences"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about Others, etc.",
                        "url" => "/all-ask/Career/Others"
                    )
                ),
                "Security" => array(
                    "Fraud-calls" =>array(
                        "img" => "/assets/icons/topics/fraud.png",
                        "title" => "Fraud Calls",
                        "des" => "Discuss about fraud calls, etc. problems.",
                        "url" => "/all-ask/Security/Fraud-calls"
                    ),
                    "Hacking" =>array(
                        "img" => "/assets/icons/topics/hacker.png",
                        "title" => "Hacking",
                        "des" => "Discuss about Hacking, Bugs, etc.",
                        "url" => "/all-ask/Security/Hacking"
                    ),
                    "Virus-malware" =>array(
                        "img" => "/assets/icons/topics/malware.png",
                        "title" => "Virus, Malware",
                        "des" => "Discuss about Virus, Malware, Ransomware, etc.",
                        "url" => "/all-ask/Security/Virus-malware"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about Others, etc.",
                        "url" => "/all-ask/Security/Others"
                    )
                ),
                "Mystery" => array(
                    "Ufo-aliens" =>array(
                        "img" => "/assets/icons/topics/ufo.png",
                        "title" => "UFO, Aliens",
                        "des" => "Discuss about UFO, Aliens, etc. problems.",
                        "url" => "/all-ask/Mystery/Ufo-aliens"
                    ),
                    "Gods" =>array(
                        "img" => "/assets/icons/topics/god.png",
                        "title" => "Gods",
                        "des" => "Discuss about in search of GOD, etc.",
                        "url" => "/all-ask/Mystery/Gods"
                    ),
                    "Supernatural-power" =>array(
                        "img" => "/assets/icons/topics/lightning.png",
                        "title" => "Supernatural powers",
                        "des" => "Discuss about Super human, psychic, etc.",
                        "url" => "/all-ask/Mystery/Supernatural-power"
                    ),
                    "Others" =>array(
                        "img" => "/assets/icons/topics/more.png",
                        "title" => "Others",
                        "des" => "Discuss about Others, etc.",
                        "url" => "/all-ask/Mystery/Others"
                    )
                )
          );

        if($query == 'all'){
            $return = $data;
        }
        if($query == "single"){
            $return = $data[$search];
        }
        if($query == "single_topic"){
        
            foreach($data as $key => $value){
                foreach($value as $new_key => $new_value){
                    if($new_key == $search){
                        $return = $new_value;
                        break;
                    }
                }
            }
        }
        return $return;
    }

    //$data = "SELECT * FROM problems WHERE topic='$id' ORDER BY id DESC";
    //echo APP_CUSTOM_PROBLEMS::getListOfProblems($data);
    public static function getListOfProblems(string $query){
        $return = '';
        if(APP_CRUD_DB::checkData($query) == true){
            $getAll = json_decode(APP_CRUD_DB::getAll($query),true);
            $data_num = count($getAll);
            if($data_num > 0){
                foreach($getAll as $que){

                    $return .= '<div class="flex list">
                            <div>
                                <img src="/assets/icons/img/gamer.png"  >
                            </div>
                            <div>
                                <a href="/ques/' . $que['id'] . '/' . str_replace(" ","-",$que['title']) . '"><h4>' . $que['title'] . '</h4></a>
                                <p>7 answers <button go_href="/all-ask/Coding/' .  $que['topic'] . '">#' .  $que['topic'] . '</button></p>
                                
                            </div>
                        </div>';
                }
            }
        }
        if($return){
            return $return;
        }else{
            return '<div class="no_content_found">
                <div>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <h2 class="text-warning">Sorry, no problem found</h2>
                    <p>Please Add one</p>
                    
                </div>
            </div>';
        }
        
    }
}

?>