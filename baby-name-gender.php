<?php

function get_gender($name)
{
    $name = strtolower($name);
    if (in_array($name, array('aaron','abe','abel','abraham','abram','acton','adam','adolph','adonis','adrian','adriano','aidric','alan','albert','alberto','alec','alex','alexander','alfonso','alfred','alistair','alonso','aloysius','alvin','alvis','anakin','anders','anderson','andre','andreas','andrew','angelo','angus','ansel','anson','anthony','anton','antonio','aquila','arch','archer','archibald','archie','arden','argus','aric','arien','arlo','arnie','arnold','arthur','arvin','ash','asher','aston','astro','augustin','augustus','aurelius','austin','axel','baines','baron','barry','bart','barton','bastien','baxter','beck','beckham','ben','bernard','benedict','benjamin','benny','benson','bernie','bill','brad','braden','bradford','bradley','brandon','branson','braxton','brennan','brian','bruce','bruno','bryant','burton','caesar','caleb','calix','calvin','carl','carlos','carlton','casper','cayden','cayman','cedric','chad','chadwick','charles','chester','christopher','clarence','clark','clay','clayton','clement','clint','clinton','clive','cody','cole','coleman','collin','conan','connell','cornell','cortez','craig','crawford','cruz','curtis','dalton','damian','damon','dan','daniel','darian','darius','darren','darryl','dave','david','davis','davon','dawson','dax','daxton','dean','dempsey','dennis','derek','derrick','desmond','dexter','diego','dmitri','dominic','don','donnel','donnie','donovan','doug','douglas','drake','duncan','dunn','dustin','dwight','dickson','earl','earnest','ed','edan','eddy','edgar','edison','edmund','edric','edward','edwin','einstein','elden','eldon','eli','elias','elijah','elton','elvis','emanuel','emery','emil','emilio','emmet','enrique','enzo','eric','ernie','ernest','ervin','ethan','ethaniel','eugene','everett','fabian','favian','felix','ferdinand','fergus','ferguson','fernando','fidel','finn','fletcher','flint','francesco','francis','franco','frank','franklin','franz','fraser','fred','fredrick','fremont','frey','gabe','gabriel','galen','gardner','gareth','garrett','garrick','gary','gavin','geoff','geoffrey','george','gerald','gibson','gilbert','gilberto','gill','giles','gino','giovani','glen','gordon','graham','grant','gray','grayer','grayson','greg','gregory','hans','hansel','harold','harris','harrison','harry','harvey','havard','heath','hector','hendrix','herbert','herman','hogan','houston','howard','howell','hubert','hugo','ian','isaac','irving','irwin','ivan','jack','jackson','jacob','jacques','jake','jared','jarl','jaron','jarvis','jason','jasper','javier','jay','jed','jeff','jefferson','jeffery','jenner','jens','jensen','jeremiah','jeremy','jerold','jerome','jim','jimmy','joachim','joel','johan','john','jonathon','johnny','johnson','jon','jonas','jones','jorge','jose','joseph','josh','joshua','josiah','jovan','judas','julio','julius','justin','karl','keith','kelvin','ken','kenneth','kenny','kent','kevin','kian','kingston','kirk','kobe','kristian','kurt','kyle','lambert','lance','lancelot','lander','landers','landon','larry','laurent','lawrence','lawson','leo','leon','leonard','leonardo','leroy','lester','levi','lewis','liam','lincoln','lionel','llyod','loki','lorenzo','lou','louie','louis','lowell','lucas','lucian','lucio','lucius','ludwig','luigi','luke','luther','mac','mace','maddox','manny','mark','marcel','marco','marcus','marlon','marques','martin','marv','matt','matthew','maurice','max','mckenzie','melvin','merv','mervin','micheal','mikel','mitch','mitchell','morris','morton','moses','nash','nate','nathaniel','ned','neil','nelson','neville','nicholas','nick','niel','nigel','nolan','norman','odysseus','oliver','olivier','orlando','otis','owen','oxford','pablo','paco','palmer','paulo','patrick','paul','pedro','perry ','pete ','peter','phil','philip','prescott','quentin','quillon','radley','rafael','ralph','ramsey','randall','raul','ray','raymond','redford','redmond','reginald','regis','remus','remington','rene','reuben','rex','reynard','reynold','ricardo','ricarlo','richard','richie','richmond','ricky','rico','rob','robbie','robert','roberto','robinson','rocco','roddy','roden','rodney','roland','roman','romano','romeo','romney','ronald','ronaldo','ronan','ross','roy','royce','rudolph','rudy','rufus','rupert','russell','samson','samuel','sanders','santiago','santos','scott','scotty','sebastien','sergei','sergio','seth','shawn','sheldon','sid','simon','smith','solomon','spence','stan','stanford','stanley','stefan','stephen','steve','steven','stewart','stuart','sylvester','ted','teddy','terence','thatcher','theo','theodore','thomas','tim','timmy','timothy','todd','tom','tommy','tony','topher','travis','trevor','troy','turner','tyson','valerian','vaughan','vern','vernon','victor','vin','vince','vincent','wally','walter','warner','warren','warrick','warwick','watt','wayne','webb','werner','weston','wilbur','wilder','wilfred','wilford','william','willie','willis','wills','wilmer','wilson','winfred','winston','woody','wright','wyatt','wyman','xander','xavier','zac','zach','zachary'))) {
        return 'male';
    } else if (in_array($name, array('aaliyah','abbey','abigail','abrielle','acadia','aceline','acelynn','ada','adabella','adalia','adela','adelaide','adele','adelie','adelina','adeline','adena','adia','adila','adla','adonia','adora','adriana','adrianne','adrina','aeryn','agatha','agnes','aileen','aimee','alanna','alannis','alayna','alda','aldona','aleah','alena','alexandria','alexia','alia','aliana','alicia','alina','alisa','alison','alissa','alivia','aliya','aliyah','barbara','beatrice','becka','becky','belinda','bella','belle','bernadette','bernice','bertha','bess','beth','bethany','betsy','betty','beyoncé','bianca','blithe','bonnie','brandi','breanna','bree','brenda','bria','brielle','briella','brigitte','brina','brinda','britannia','britney','cady','caia','cailyn','caitlyn','calista','callie','camelia','camilla','candace','candie','cara','carina','carissa','carla','carlina','carly','carlyn','caroline','carrie','cassandra','cassia','cassie','catherine','cathy','cece','cecily','celeste','celia','celina','celine','chanel','chantelle','charissa','charrise','charlene','charlotte','charmaine','chasity','chelsa','chelsea','chelsia','cherry','cheryl','chloe','chrissy','christel','christiana','christiane','christina','christine','ciara','cindy','claire','clara','clarice','clarissa','claudia','cleo','clover','colleen','constance','corina','corine','crescentia','crystal','cynthia','dahlia','daisy','dalia','damara','damia','danelle','dani','daniella','danielle','danna','daphne','dara','darla','dawn','dayna','dea','deanna','deanne','debbie','deborah','dee','deena','delia','delilah','della','delphi','delphina','delphine','denise','desiree','diana','diane','diella','dilys','dina','dionne','dolly','donna','dora','doris','dorothea','dorothy','drea','dyan','brittany','carolina','cecilia','cecil','darcie','earlene','ebony','edana','edena','edita','edith','edna','edlina','edwina','eileen','elaina','elaine','elana','elandra','elda','eldora','elea','eleanor','elena','elia','eliana','elin','elisa','elise','elissa','eliza','elizabeth','ella','elliana','ellie','eloise','elora','elsie','elsa','elvina','elyse','emberlynn','emelyn','emilia','emiliana','emily','emma','emmy','enid','enya','eri','erica','erin','erma','erna','estee','estella','esther','ethel','eugenie','eunice','eva','evana','evangeline','eve','evia','evie','evonne','fabienne','fala','faith','fanny','farah','faye','fedora','felice','felicia','felicity','fern','feya','fia','fidelia','fion','fiona','fiorella','fiorenza','fleur','flo','flora','florence','frances','francesca','franny','freida','frida','gabby','gabriela','gabrielle','gaia','gail','gazelle','gemma','georgia','georgina','geraldine','geri','germaine','gianna','gigi','gilda','gillian','gina','gin','ginny','giselle','gladys','gloria','grace','gracelyn','gracie','greta','gretchen','griselda','guinevere','gwen','gwendolyn','gwyneth','hailey','hanna','hazel','heather','hebe','heidi','helen','helena','henriette','hera','hester','ida','iliana','ilissa','inez','irene','iris','isabelle','isabella','ivana','ivy','jacinta','jacinth','jackie','jaclyn','jacqueline','jadyn','jael','jaelyn','jane','janelle','janessa','janet','janice','janie','janine','janis','jasmine','jayla','jaylyn','jayna','jayne','jazlyn','jeana','jeanette','jeanine','jeanne','jeannie','jen','jenelle','jenna','jennifer','jennis','jenny','jeri','jeslyn','jerrica','jessie','jessica','jessia','jewel','jill','jillian','joan','joanna','joanne','joella','joelle','johanna','joie','jojo','jolene','josephina','josephine','josie','jovia','jovie','joy','joyce','juana','juanita','judith','judy','julia','juliana','julianne','julie','juliet','june','kaitlyn','karen','karena','karissa','karla','karlyn','kate','katherine','kathleen','kathryn','kathy','katniss','katrice','katrina','katy','kay','kayla','kaylee','kayleen','keira','keisha','kelis','kella','kellyn','kelsey','kendria','kendra','kenisha','kesha','kevlyn','kiden','kierra','kiki','kimber','kimi','kirsty','kitty','krista','kristen','kristina','kristy','krystal','kyla','kylie','laine','lana','lara','laura','laurel','lauren','layla','leah','leandra','leann','leanna','leia','lena','leona','lesley','lethia','leticia','lila','lilia','lilith','lillian','lily','lina','linda','linette','lisa','livvy','liz','liza','lizzie','lois','lola','lorelei','lorenza','lori','lorna','louisa','louise','lucia','lucy','lucille','lulu','luna','lydia','lynette','lyra','mabel','macy','maddy','madelaine','madelia','madeline','madge','madonna','maegan','maeve','magdalena','maggie','mandy','margaret','maria','mariam','marianne','mariette','marilyn','marisa','marla','martha','mary','matilda','maureen','mave','mavis','may','maya','megan','melanie','melia','melinda','melissa','melodie','merlyn','mia','michelle','mildred','miley','milla','millie','mina','mira','miriam','missa','molly','mona','monica','monique','morna','myra','nadia','nakita','nancy','naomi','nara','natalie','natasha','nicolette','nikki','nina','nira','nisha','norah','norma','odelia','olive','olivia','ophelia','ophrah','oprah','ottilia','nelli','paige','pamela','pam','pandora','patsy','patricia','paula','paulina','pauline','pearly','peg','peggy','penelope','penny','peony','pepper','petra','philippa','phoebe','phyliss','polly','priscilla','prue','queenie','quilla','quineisha','rach','rachel','raina','rebecca','regina','rhea','rhianna','rhoda','rhonda','rihana','rika','rina','romaine','ronen','rosa','rosalind','rosalinda','rosamund','rosanna','rose','roseanne','roselyn','rosemary','rosetta','rosette','rosie','rosina','rowena','roxanne','ruby','rue','ruth','ryann','gia','sabrina','samantha','sandra','sara','scarlett','selena','selene','sharon','shawna','sheena','sheera','sherine','sherlyn','sherry','sheryl','shirley','sonya','sophia','sophie','stacey','stacia','stefanie','stella','stephanie','sue','susan','susanna','susanne','susie','suzanne','suzy','sylvia','tamara','tamera','tammy','tanya','tara','tasha','tatiana','tavia','tedra','teresa','terri','tessa','thea','thelma','theodora','tia','tierra','tiffany','tilda','tisha','tori','tricia','trista','trudy','tyra','ursula','valeria','valerie','vanessa','venice','vera','verina','veron','verona','veronica','veronique','vianne','vienna','violet','virginia','vivi','vivian','viviana','wanda','wendy','wilda','wilma','winnie','wren','wynona','xandra','yolanda','yvonne','zara','zena','zoe','adelyn','elanie','jolie','laney'))) {
        return 'female';
    } else {
        return 'unknown';
    }
}
