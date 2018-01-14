$friends_sql=mysql_query("SELECT b.friend_two FROM
 (SELECT friend_two FROM friends WHERE friend_one = $myvar1)
 a INNER JOIN (SELECT friend_two FROM friends WHERE friend_one = $myvar2) 
 b ON a.friend_two = b.friend_two");
                while($friends=mysql_fetch_array($friends_sql))
                {
                     $getMutualFriendInfo = mysql_query("SELECT * FROM users WHERE uid='{$friends['friend_two']}'");
                      $MutualFriendInfo = mysql_fetch_array($getMutualFriendInfo);
                ?>
                <li>


 <img src="<?=MutualFriendInfo['profile_pic']?>"><p><?=MutualFriendInfo['name_f'] ?> 
 <?=MutualFriendInfo['name_l'] ?></p><a href="/user.php?uid=<?=MutualFriendInfo['uid'] ?>"></a>
</li>

                <?php
                }
                ?>
				//////////////////////////////////////////////////This is the part of a code and the query that I use to
				list all the members with the add as friend button next to the name inside a table.
				$query ="SELECT friend_id from friends
                    WHERE friend_id <>'$friendID'
                    AND
                    friend_id NOT IN( SELECT friend_id2 from myfriends WHERE friend_id1='$friendID')";

$query ="SELECT myusername from friendlist
                    WHERE myusername<>'$friendID'
                    AND
                    myusername NOT IN( SELECT friendusername from friendlist WHERE myusername='$friendID')";


///////////////////////////////////mutal friend////////////////////////////////////////////////////////////////////////////////
SELECT
   f.profile_name,
   f.friend_id,
   COUNT(DISTINCT m2.friend_id1) AS count_mutual
FROM 
   friends AS f
   LEFT JOIN myfriends AS m1
     ON (m1.friend_id1 = f.friend_id)
   LEFT JOIN myfriends AS m2
     ON (m1.friend_id2 = m2.friend_id1 AND m2.friend_id2 = '$friendID')
WHERE 
   f.friend_id <> '$friendID' 
   AND f.friend_id NOT IN(SELECT 
                           friend_id2 
                        FROM 
                           myfriends
                        WHERE 
                           friend_id1= '$friendID')
GROUP BY
    f.friend_id
//////////////////////////////////////////////////////////////////////////////////////////////////////

SELECT * FROM table WHERE 123 IN(col1, col2, col3, col4);
/////////////////////////////////////select friend
SELECT 
    friendsTbl.*,
    profileTbl.*
FROM friendsTbl
LEFT JOIN profileTbl ON (profile_name = IF(friendsTbl.profile_one = 'john123',friendsTbl.profile_two, friendsTbl.profile_one) )
WHERE friendsTbl.profile_one = 'john123' OR friendsTbl.profile_two = 'john123'