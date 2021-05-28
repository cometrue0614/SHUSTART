<?php
@session_start();

/**
 * 取得所有發布至Art的文章
 */
function get_art_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 1 ORDER BY `create_date` DESC;";

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

  //回傳結果
  return $datas;
}

/**
 * 取得單篇文章
 */
function get_art_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 1 AND `id` = {$id}";

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
 * 取得所有發布至Music的文章
 */
function get_music_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 2 ORDER BY `create_date` DESC;";

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
function get_music_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 2 AND `id` = {$id}";

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

  //回傳結果
  return $result;
}

/**
 * 取得所有發布至Design的文章
 */
function get_design_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 3 ORDER BY `create_date` DESC;";

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
function get_design_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 3 AND `id` = {$id}";

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
 * 取得所有發布至Game的文章
 */
function get_game_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 4 ORDER BY `create_date` DESC;";

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
function get_game_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 4 AND `id` = {$id}";

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
 * 取得所有發布至Film的文章
 */
function get_film_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 5 ORDER BY `create_date` DESC;";

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
function get_film_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 5 AND `id` = {$id}";

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
 * 取得所有發布至Photograph的文章
 */
function get_photograph_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 6 ORDER BY `create_date` DESC;";

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
function get_photograph_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 6 AND `id` = {$id}";

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
 * 取得所有發布至Publishing的文章
 */
function get_publishing_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 7 ORDER BY `create_date` DESC;";

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
function get_publishing_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 7 AND `id` = {$id}";

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
 * 取得所有發布至Technology的文章
 */
function get_technology_article_list()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 8 ORDER BY `create_date` DESC;";

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
function get_technology_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `field` = 8 AND `id` = {$id}";

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
function get_all_article()
{
  $datas = array();

  $sql = "SELECT * FROM `article` WHERE `creater_id`= {$_SESSION['login_user_id']}";

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
function add_article($title, $category, $field, $content, $image_path, $video_path, $publish)
{
  $result = null;
  
  $create_date = date("Y-m-d H:i:s");
  
  $creater_id = $_SESSION['login_user_id'];
  
  $image_path_value = "'{$image_path}'";
  if($image_path == "") {
     $image_path_value = "NULL";
  }
  
  $video_path_value = "'{$video_path}'";
  if($video_path == "") {
     $video_path_value = "NULL";
  }

  $sql = "INSERT INTO `article` (`title`, `category`, `field`, `content`, `image_path`, `video_path`, `publish`, `create_date`, `creater_id`) VALUES ('{$title}', '{$category}', '{$field}', '{$content}', {$image_path_value}, {$video_path_value}, '{$publish}', '{$create_date}', '{$creater_id}')";

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
function get_edit_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `id` = {$id}";

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
function update_article($id, $title, $category, $field, $content, $image_path, $video_path, $publish)
{
  $result = null;
  
  $modify_date = date("Y-m-d H:i:s");

  $sql = "UPDATE `article` SET `title` = '{$title}', `category` = '{$category}', `field` = '{$field}', `content` = '{$content}', `image_path` = '{$image_path}', `video_path` = '{$video_path}', `publish` = '{$publish}', `modify_date` = '{$modify_date}' WHERE `id` = {$id}";

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
function del_article($id)
{
  $result = null;

  $sql = "DELETE FROM `article` WHERE `id` = {$id}";

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