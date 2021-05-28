<?php
@session_start();

/**
 * 取得所有rtf畢展的作品
 */
function get_gra_rtf_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 1 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_rtf_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 1 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有news畢展的作品
 */
function get_gra_news_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 2 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_news_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 2 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有pc畢展的作品
 */
function get_gra_pc_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 3 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_pc_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 3 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有gcdp畢展的作品
 */
function get_gra_gcdp_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 4 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_gcdp_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 4 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有ic畢展的作品
 */
function get_gra_ic_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 5 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_ic_rtf_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 5 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有speech畢展的作品
 */
function get_gra_speech_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 6 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_speech_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 6 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有cm畢展的作品
 */
function get_gra_cm_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 7 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_cm_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 7 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有dma畢展的作品
 */
function get_gra_dma_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 8 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_dma_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 8 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有im畢展的作品
 */
function get_gra_im_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 9 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_im_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 9 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有ba畢展的作品
 */
function get_gra_ba_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 10 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_ba_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 10 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有tourism畢展的作品
 */
function get_gra_tourism_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 11 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_tourism_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 11 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有eng畢展的作品
 */
function get_gra_eng_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 12 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_eng_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 12 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有jpn畢展的作品
 */
function get_gra_jpn_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 13 AND `category` = 1 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_gra_jpn_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 13 AND `category` = 1 AND `id` = {$id};";

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
 * 取得所有rtf傳技展的作品
 */
function get_media_rtf_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 1 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_rtf_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 1 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有news傳技展的作品
 */
function get_media_news_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 2 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_news_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 2 AND `category` = 2 AND `id` = {$id};";

  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
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
 * 取得所有pc傳技展的作品
 */
function get_media_pc_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 3 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_pc_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 3 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有gcdp傳技展的作品
 */
function get_media_gcdp_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 4 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_gcdp_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 4 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有ic傳技展的作品
 */
function get_media_ic_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 5 AND `category` = 2 ORDER BY `upload_date` DESC;";

  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
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
 * 取得單篇作品
 */
function get_media_ic_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 5 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有speech傳技展的作品
 */
function get_media_speech_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 6 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_speech_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 6 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有cm傳技展的作品
 */
function get_media_cm_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 7 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_cm_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 7 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有dma傳技展的作品
 */
function get_media_dma_works_list()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 8 AND `category` = 2 ORDER BY `upload_date` DESC;";

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
 * 取得單篇作品
 */
function get_media_dma_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `subject` = 8 AND `category` = 2 AND `id` = {$id};";

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
 * 取得所有作品
 */
function get_all_works()
{
  $datas = array();

  $sql = "SELECT * FROM `works` WHERE `create_user_id`= {$_SESSION['login_user_id']}";

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
 * 新增作品
 */
function add_works($title, $intro, $content, $subject, $category, $video_path, $publish)
{
  $result = null;
  
  $upload_date = date("Y-m-d H:i:s");
  
  $create_user_id = $_SESSION['login_user_id'];

  $sql = "INSERT INTO `works` (`title`, `intro`, `content`, `subject`, `category`, `video_path`, `publish`, `upload_date`, `create_user_id`) VALUES ('{$title}', '{$intro}', '{$content}', '{$subject}', '{$category}', '{$video_path}', '{$publish}', '{$upload_date}', '{$create_user_id}')";

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
function get_edit_works($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `id` = {$id}";

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
function update_works($id, $title, $intro, $content, $subject, $category, $video_path, $publish)
{
  $result = null;
  
  $modify_date = date("Y-m-d H:i:s");

  $sql = "UPDATE `works` SET `title` = '{$title}', `intro` = '{$intro}', `content` = '{$content}', `subject` = '{$subject}', `category` = '{$category}', `video_path` = '{$video_path}', `publish` = '{$publish}', `modify_date` = '{$modify_date}' WHERE `id` = {$id}";

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
function del_works($id)
{
  $result = null;

  $sql = "DELETE FROM `works` WHERE `id` = {$id}";

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