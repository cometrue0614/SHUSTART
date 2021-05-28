<?php
@session_start();

/**
 * 檢查資料庫有無該使用者名稱
 */
function check_has_username($m_username)
{
  $result = null;

  $sql = "SELECT * FROM `user` WHERE `m_username` = '{$m_username}'";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if (mysqli_num_rows($query) == 1)
    {
      $result = true;
    }

    mysqli_free_result($query);
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  return $result;
}

/**
 * 檢查資料庫有無該使用者名稱
 */
function add_user($m_username, $m_password, $m_last_name, $m_first_name, $m_stdid, $m_subject, $m_birthday, $m_email, $m_phone)
{
  $result = null;
	$m_password = md5($m_password);
  $sql = "INSERT INTO `user` (`m_username`, `m_password`, `m_last_name`, `m_first_name`, `m_stdid`, `m_subject`, `m_birthday`, `m_email`, `m_phone`) VALUES ('{$m_username}', '{$m_password}', '{$m_last_name}', '{$m_first_name}', '{$m_stdid}', '{$m_subject}', '{$m_birthday}', '{$m_email}', '{$m_phone}')";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if(mysqli_affected_rows($_SESSION['link']) >= 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" .mysqli_error($_SESSION['link']);
    $result = false;
  }

  return $result;
}

/**
 * 檢查資料庫有無該使用者名稱
 */
function verify_user($m_username, $m_password)
{
  $result = null;
  $m_password = md5($m_password);
  $sql = "SELECT * FROM `user` WHERE `m_username` = '{$m_username}' AND `m_password` = '{$m_password}'";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if(mysqli_num_rows($query) == 1)
    {
      $user = mysqli_fetch_assoc($query);

      $_SESSION['is_login'] = TRUE;
      $_SESSION['login_user_id'] = $user['m_id'];

      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  return $result;
}

/**
 * 取得會員資料
 */
function get_user()
{
  $datas = array();

  $sql = "SELECT * FROM `user` WHERE `m_id`= '{$_SESSION['login_user_id']}'";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if (mysqli_num_rows($query) > 0)
    {
      while ($row = mysqli_fetch_assoc($query))
      {
        $datas[] = $row;
      }
    }

    mysqli_free_result($query);
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $datas;
}

  /**
 * 刪除會員資料
 */
function del_user($m_id)
{
  $result = null;

  $sql = "DELETE FROM `user` WHERE `m_id` = '{$m_id}'";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if(mysqli_affected_rows($_SESSION['link']) >= 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" .mysqli_error($_SESSION['link']);
    $result = false;
  }

  return $result;
}

/**
 * 取得要編輯的會員資料
 */
function get_edit_user($m_id)
{
  $result = null;

  $sql = "SELECT * FROM `user` WHERE `m_id`= '{$m_id}'";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if (mysqli_num_rows($query) == 1)
    {
      $result = mysqli_fetch_assoc($query);
    }

    mysqli_free_result($query);
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  return $result;
}

/**
 * 更新會員資料
 */
function update_user($m_id, $m_username, $m_password, $m_last_name, $m_first_name, $m_subject, $m_email, $m_phone)
{
  $result = null;
  
  $m_password_sql = '';
  
  if($m_password != '')
  {
    $m_password = md5($m_password);
    $m_password_sql = "`m_password` = '{$m_password}',";
  }

  $sql = "UPDATE `user` SET 
          `m_username` = '{$m_username}',
          {$m_password_sql}
          `m_last_name` = '{$m_last_name}',
          `m_first_name` = '{$m_first_name}',
          `m_subject` = '{$m_subject}',
          `m_email` = '{$m_email}',
          `m_phone` = '{$m_phone}'
          WHERE `m_id` = '{$m_id}'";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query)
  {
    if(mysqli_affected_rows($_SESSION['link']) >= 1)
    {
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" .mysqli_error($_SESSION['link']);
    $result = false;
  }

  return $result;
}

?>