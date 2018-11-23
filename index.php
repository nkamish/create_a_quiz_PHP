<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Assassin's Creed Quiz</title>
    <link rel="stylesheet" href="css/main.css">

    <style>
        /*----------------- Basic styles for website begins here -------------*/
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #46474c;
        }
        p {
            color: rgb(217, 217, 223);
        }
        .title.is-4{
            color: darkgray;
        }
        /*---------------- Basic styles for website ends here ---------*/

        /*---------------- Styles for beings here --------------------*/
        .hero {
            background-image: url('img/hero.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .hero-body {
            margin-bottom: 1.5rem;
            position: relative;
            bottom: 150px;  
        }
        .hero-body > .container {
            position: absolute;
            top: 50%;
        }
        .hero-body > div > h1 {
            color: white;
        }
        .hero-body > div > h2 {
            color:dimgrey;
        }
        /*-------------------- Styles for ends here ----------------------*/

        /*----------------- Styles for containers begins here ------------*/
        .main-container {
            position: relative;
            top: 10px;
        }
        .footer {
            color: white;
            background-color: #46474c;
            padding: 2%;
            margin-top: 10px;
        }
        /*--------------- Styles for containers begins here ---------------*/

        .notification { /* Backgroung styling for quiz answer options */
            background-color: #46474c;
            /* background-repeat: no-repeat;
            background-size: cover; */
            text-align: center;
            padding-top: 10px;
        }
        .box {
            background-image: url('img/background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }
        .box > h2 {
            font-size: 50px;
            font-weight: normal;
            color: currentColor;
        }
        .box > p {
            color: rgb(217, 217, 223);
            padding: 15px;
            font-size: 25px;
        }
        /*----------------- Styles for containers ends here -----------------*/

        /*--------------- Stlyes for button begins here -------------------*/
        input[type=radio] {
            opacity: 0;
            margin: 1.2em 0;
        }
        label {
            border: 1px solid transparent;
            border-color: #fff;
            color: crimson;
            background-color: #331218;
            border-radius: 3px;
            padding: 0.5em 1em;
            width: 1024px;
            margin: 0;
        }
        label:hover {
            border-color: #fff;
            color: grey;
            background-color: black;
        }
        input[type=radio]:checked + label {
            border-color: #fff;
            color: grey;
            background-color: black;
            
        }
        .answers { /*-------- grid layout for buttons --------*/
            display:grid;
            grid-template-rows:1fr 1fr 1fr 1fr;
            margin: 0 auto;
        }
        .answers div {
            width: 100%;
            margin: 0;
        }
        /*--------------- Stlyes for button begins here -------------------*/
        
        /*-------------- Submit button styles begins here ----------------*/
        .submit { 
            color: grey;
            background-color: #212223;
            width: 100%;
        }
        .submit:hover{
            color: black;
            background-color: #ffffffb8;
        }
        button, input, select, textarea {
            margin: 0;
            border: 1px solid transparent;
            border-color: #fff;
            color: crimson;
            background-color: #331218;
            border-radius: 3px;
            padding: 0.5em 1em;
            width: 100%;
            margin: 0;
        }
        /*---------------- Submit button styles ends here -----------------*/

        /*---------------- Stlyes for button ends here -------------------*/
    </style>

</head>
<body>


<!------------------------- Structure for hero-image begins here ------------------------->

    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-top">
                    Assassin's Creed Quiz Challenge
                </h1>
                <h2 class="subtitle">
                    Nothing is true | Everything is permitted
                </h2>
            </div>
        </div>
    </section>

<!------------------------- Structure for hero-image ends here --------------------------->

<!-------------------------- Structure for quiz answers begins here ------------------------------>

<div class="container">
    <div class="notification">
        <form action='results.php' method="post">

            <?php
            $_SESSION['quizPieces'] = $quizPieces = array(

                array(
                // <!---------------------------------------- Start of Question 1 ------------------------------>

                'q' => 'Why did Altair lose his rank in the beginning of the first game?', 
                // ANSWERS

                'Broke the three tenants', 
                'He was aggressive', 
                'He was a coward', 
                'He killed an innocent',
                'none'
            ),
                array(
                // <!---------------------------------------- Start of Question 2 ------------------------------> 
                
                'q' => 'Who did Ezio have a fist fight with as a young adult?', 
                // ANSWERS

                'Giovanni Tornabuoni', 
                'Vieri de Pazzi', 
                'Leonardo da Vinci', 
                'Giovanni Audi tore',
                'none'
            ),
                array(
                // <!---------------------------------------- Start of Question 3 ------------------------------>
                    
                'q' => 'Where was the primary setting of Assassin\'s Creed Brotherhood?', 
                // ANSWERS
                
                'Florence', 
                'Italy', 
                'Greece', 
                'Rome',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 4 ------------------------------>
                    
                'q' => 'Who was the secondary assassin that you play as in Assassin\'s Creed Revelations?', 
                // ANSWERS

                'Jacob Frey', 
                'Edward Kenway', 
                'Altair ibn-La\'Ahad', 
                'Conner Kenway',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 5 ------------------------------>
                    
                'q' => 'What region was Achilles Davenport (Conner\'s mentor) born in?', 
                // ANSWERS

                'Early American Colonies', 
                'The Caribbean', 
                'England', 
                'Egypt',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 6 ------------------------------>
                    
                'q' => 'Who was NOT a pirate who teamed up with Edward Kenway in Assassin\'s Creed 4?', 
                // ANSWERS

                'Calico Jack', 
                'Henry Every', 
                'Bartholowmew Roberts', 
                'Black Beard',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 7 ------------------------------>
                
                'q' => 'Which piece of Eden is featured in Assassin\'s Creed Unity?', 
                // ANSWERS

                'Apple of Eden', 
                'Crystal Skull of Eden', 
                'Sword of Eden', 
                'Shroud of Eden',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 8 ------------------------------>
                    
                'q' => 'What was the name of the gang that Jacob Frye started in Assassin\'s Creed Syndicate?', 
                // ANSWERS

                'The Rooks', 
                'The Eagles', 
                'The Assassins', 
                'The Templars',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 9 ------------------------------>
                    
                'q' => 'What death shaped Bayek\'s motives in the early stages of Assassin\'s Creed Origin?', 
                // ANSWERS

                'His wife\'s death', 
                'His son\'s death', 
                'His friend\'s death', 
                'Becoming an Assassin',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 10 ------------------------------>
                    
                'q' => 'In what specific City State does the main protagonist originate from in Assassins Creed Odyssey?', 
                // ANSWERS

                'Thebes', 
                'Sparta', 
                'Athens', 
                'Greece',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 11 ------------------------------>
                    
                'q' => 'Who is the first Templar you play as in the Assassin\'s Creed series?', 
                // ANSWERS

                'Haytham Kenway', 
                'Edward Kenway', 
                'Rodrigo Borgia', 
                'Otso Berg',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 12 ------------------------------>
                    
                'q' => 'Who is the first person you personally kill in Black Flag?', 
                // ANSWERS

                'Rodrigo Borgia', 
                'El Tiburon', 
                'Duncan Walpole', 
                'Shay Cormac',
                'none'

            ),		
                array(
                // <!---------------------------------------- Start of Question 13 ------------------------------>
                    
                'q' => 'Who is the final person wounded in Assassin\'s Creed: Rogue?', 
                // ANSWERS

                'Liam O\'Brien', 
                'Haytham Kenway', 
                'Achilles Davenport', 
                'Hope Jensen',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 14 ------------------------------>
                    
                'q' => 'Who is the final target in Assassin\'s Creed: Unity?', 
                // ANSWERS

                'Thomas Francois-Germain', 
                'Arno Dorian', 
                'Benjamin Hornigold', 
                'Elise de la Serre',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 15 ------------------------------>
                    
                'q' => 'What is the name of Edward Kenway\'s ship?', 
                // ANSWERS

                'The Jackbird', 
                'The Jackdaw', 
                'The Black Pearl', 
                'Her Majesty',
                'none'

            ),
            array(
                // <!---------------------------------------- Start of Question 16 ------------------------------>
                    
                'q' => 'How does Ezio\'s father die?', 
                // ANSWERS

                'He is assassinated', 
                'Sickness', 
                'He is hanged', 
                'He doesn\'t',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 17 ------------------------------>
                    
                'q' => 'In which game does Desmond die?', 
                // ANSWERS

                'Assassin\'s Creed II', 
                'Assassin\'s Creed: Revelations', 
                'Assassin\'s Creed IV: Black Flag', 
                'Assassin\'s Creed III',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 18 ------------------------------>
                    
                'q' => 'In Assassin\'s Creed IV: Black Flag, what is the name of the island where the Assassins hide out?',
                // ANSWERS

                'Tulum', 
                'Nasseau', 
                'Havana', 
                'Assassin Island',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 19 ------------------------------>
                    
                'q' => 'James Kidd was in disguise in Assassin\'s Creed IV: Black Flag. What was he really?', 
                // ANSWERS

                'A Templar', 
                'A woman', 
                'An assassin', 
                'A mentor',
                'none'

            ),
                array(
                // <!---------------------------------------- Start of Question 20 ------------------------------>
                    
                'q' => 'Hehehe..... What is the color of Edward Kenway\'s hair?! -.-', 
                // ANSWERS

                'Black', 
                'Blonde', 
                'Red', 
                'Brown',
                'none'

                )
                
            );

        ?>
        <?php
            for ($i = 0; $i < count($quizPieces); $i++) { ?>

            <section class='box'>
                    <h2>
                        Question <span class="num"> <?php echo $i+1 ?> </span>
                    </h2>
                    <p>
                        <?php echo $quizPieces[$i]['q']; ?>
                    </p>
                    <section class='grid'>
                    <?php 
                        $x = 0;
                    for ($n = $i*4; $n < ($i+1)*4; $n++) { 

                        ?>
                        <input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>" onclick="play()"><?php echo $quizPieces[$i][$x] ?></label>
                    <?php
                            $x++; 
                
                } ?>
                    <input type="radio" name="<?php echo $i; ?>" value="4" checked="checked">
                    </section>
                </section>

            <?php }
        ?>
	    <!-- </form>   -->
    </div>
</div>        
<!-------------------------- Structure for quiz answers ends here ------------------------------>

<!---------------- Structure for submit button begins here ------------------>
<!-- <form action='results.php' method="post"> -->
    <div class="container">
        <div class="notification">
            <section class="submit">
                <input type="submit" value="Submit!">
            </section>
        </div>
    </div>
</form>
<!---------------- Structure for submit button ends here -------------------->


</body>
</html>