<?php
@session_start();

function get_pt_list()
{
  $datas = array();

  $sql = "SELECT * FROM `pt` WHERE `publish` = 1 ORDER BY `create_date` DESC";

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
 * 取得單篇文章
 */
function get_pt($id)
{
  $result = null;

  $sql = "SELECT * FROM `pt` WHERE `id` = {$id}";

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
 * 取得所有文章
 */
function get_all_pt()
{
  $datas = array();

  $sql = "SELECT * FROM `pt` WHERE `creater_id`= {$_SESSION['login_user_id']}";

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
 * 新增文章
 */
function add_pt($title, $category, $ptname, $specialty, $intro, $content, $price, $image_path, $publish)
{
  $result = null;
  
  $create_date = date("Y-m-d H:i:s");
  
  $creater_id = $_SESSION['login_user_id'];

  $sql = "INSERT INTO `pt` (`title`, `category`, `ptname`, `specialty`, `intro`, `content`, `price`, `image_path`, `publish`, `create_date`, `creater_id`) VALUES ('{$title}', '{$category}', '{$ptname}', '{$specialty}', '{$intro}', '{$content}', '{$price}', '{$image_path}', '{$publish}', '{$create_date}', '{$creater_id}')";

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
 * 取得要編輯的文章
 */
function get_edit_pt($id)
{
  $result = null;

  $sql = "SELECT * FROM `pt` WHERE `id` = {$id}";

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
 * 更新文章
 */
function update_pt($id, $title, $category, $ptname, $specialty, $intro, $content, $price, $image_path, $publish)
{
  $result = null;
  
  $modify_date = date("Y-m-d H:i:s");

  $sql = "UPDATE `pt` SET `title` = '{$title}', `category` = '{$category}', `ptname` = '{$ptname}', `specialty` = '{$specialty}', `intro` = '{$intro}', `content` = '{$content}', `price` = '{$price}', `image_path` = '{$image_path}', `publish` = '{$publish}', `modify_date` = '{$modify_date}' WHERE `id` = {$id}";

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
 * 刪除文章
 */
function del_pt($id)
{
  $result = null;

  $sql = "DELETE FROM `pt` WHERE `id` = {$id}";

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