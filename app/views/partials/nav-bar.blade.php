<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>

        <ul class="nav navbar-nav">
            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
            <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
            <li><a href="{{{ action('HomeController@rollDice', mt_rand(1,6)) }}}">Roll the Dice</a></li>
        </ul>
    </div>
</nav>
