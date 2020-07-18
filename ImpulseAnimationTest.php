<?php


function ImpulseAnimation($microseconds_explosion, $delay){    
    $behind = "    ";
    $piston = "[=";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";

    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "   ~";
    $piston = "[=";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "  ~ ";
    $piston = "[=";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = " ~  ";
    $piston = "[=";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "\033[97m *  \033[0m";
    $piston = "\033[97m[=\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "\033[93m O  \033[0m";
    $piston = "\033[97m[=\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "\033[95m O\033[0m\033[93m) \033[0m";
    $piston = "\033[97m[=\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = " \033[91mO\033[0m\033[91m)\033[0m\033[93m)\033[0m";
    $piston = "\033[97m[=\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = " \033[91mO\033[0m\033[91m)\033[0m\033[91m)\033[0m\033[93m)\033[0m";
    $piston = "\033[93m[\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = " \033[95mO\033[0m\033[95m)\033[0m\033[91m)\033[0m\033[91m)\033[0m";
    $piston = "\033[91m[\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";
	
    $behind = " \033[93mO\033[0m\033[93m)\033[0m\033[95m)\033[0m\033[91m)\033[0m";
    $piston = "\033[91m[\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "  )\033[93m)\033[0m\033[95m)\033[0m";
    $piston = "\033[95m[\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "   )\033[93m)\033[0m";
    $piston = "\033[93m[\033[0m";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "\033[97m||\033[0m";
    $ship_upper = "\033[96m]]]]]\033[0m";
    $ship_cone = "\033[91m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "    )";
    $piston = "[";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "     ";
    $piston = "[";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($microseconds_explosion);
    echo "\033[F";

    $behind = "    ";
    $piston = "[=";
    $ship_lower = "\033[36m{\033[0m";
    $ship_stripes = "||";
    $ship_upper = "\033[36m]]]]]\033[0m";
    $ship_cone = "\033[31m>\033[0m";
    echo "$behind$piston$ship_lower$ship_stripes$ship_upper$ship_cone\n";
    usleep($delay);
    echo "\033[F";

}


for($i=0;$i<500;$i++){
    ImpulseAnimation(50000, 3000000);
}
