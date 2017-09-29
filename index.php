<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assignment Five Home Page</title>

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="static/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		 <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="navigation.css">
    </head>

    <body>

        <div class="container">

            <header>
                <div class="heading">
                    <h1>Team Pyongyang</h1>
                </div><!--closes heading class-->
            </header>

            <nav class="menu">
                <?php include 'inc/navigation.php'; ?>
            </nav>

            <div class="content">

                <div class="well">
                    <h2><a href="jerrydai.php">Jerry Dai</a></h2>
                    <p>
                        Hi my name is Jerry and I am a junior at the U of R. I'm from Queens, NY but my parents moved to Brooklyn from China when they were in their early 20s. My hobbies are music, lifting, and cooking. My favorite foods include halal, vodka slices, and sushi. I am double majoring in Business and Computer Science and I'm interested in working in finance in the future.
                    </p>
			<a href="jerrydai.php"> Read more about Jerry on the page here</a>
                </div><!--closes well class-->

                <div class="well">
                    <h2><a href="philipkallinos.php">Philip Kallinos</a></h2>
                    <p>
                        I am from Lindenhurst, New York. My parents are both immigrants. My father is from Cyprus and my mother is from Thailand. I also have one older sister. I am currently a Junior at the University of Rochester. I am studying Business with a concentration in Finance. I plan on completing a minor in math and computer science, hopefully.
                    </p>
                    <a href="philipkallinos.php">Read more about Phillip on the  page here </a>
                </div><!--closes well class-->

                <div class="well">
                    <h2><a href="daniellabloom.php">Daniella Bloom</a></h2>
                   <p>Daniella was born and grew up in New York City on the Upper West Side. She lived with her mom, dad, brother Jamie and brother Paul. She started doing gymnastics recreationally and when she was 8, she joined a team. She stopped doing gymnastics right before highschool started.</p>
        
         <a href="daniellabloom.php"> Read more about Daniella on the page here </a>
                </div><!--closes well class-->

            </div><!--closes content class-->

            <footer>
                <?php include 'inc/footer.php'; ?>
            </footer>

        </div><!--closes the container class-->

    </body>

</html>
