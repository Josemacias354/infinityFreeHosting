<?php
function get_browser_name($user_agent)
{
    if(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif(strpos($user_agent, 'Edge')) return 'Edge';
    elseif(strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif(strpos($user_agent, 'Safari')) return 'Safari';
    elseif(strpos($user_agent, 'Firefox')) return 'Firefox';

}

$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
echo $browser;