<?php
  include __DIR__  .'/../includes/UserFunctions.php';
  $data_dir='./data/';
  if(isset($_GET['page']))
    $page = htmlspecialchars($_GET['page'], ENT_QUOTES, 'UTF-8');
  else
    $page = 1;
  $listnum = 3;   // page ��3ĭ
  $pagenum = 3;
  $offset = $listnum*($page-1);     // 0
  $filename = readFileName($data_dir);
  sort($filename);
  $total_cnt = count($filename);    // ���� ���� Ȯ��
  $total_page = ceil($total_cnt/$listnum);  // �Ҽ��� �ø�. ex) 8/3 = 2 ... 2 = 3
  $cur_no = $total_cnt - $listnum*($page-1);
  $outStr = '<div class="form_class">' .
            ' ���� �� ���� = ' . $total_cnt . ' ��: ' . $total_page . ' ��<br>' .
            '���� �ʹ�ȣ = ' . $page . ', ���� ��ȣ =  ' . $cur_no .
            ' <a href=sj43index.php>�Է� ȭ������ </a></div>';
            
  for($i=$cur_no -1; $i >= $cur_no-3; $i--){ // 3�� ���
    $data=file("$data_dir/$filename[$i]");
    $tmp = implode($data,"<br>");
    $outStr .= '<div id="list">���ϳ��� ' . $filename[$i] . '<br><span id="list2">' .
                $tmp . ' </span></div>';
    
    if($i == 0)
      break;
  }
  $total_block = ceil($total_page/$pagenum);  //0
  $block = ceil($page/$pagenum);  //1
  $first = ($block-1) * $pagenum; //0
  $last = $block * $pagenum;      //3
  if($block >=total_block){
    $last = $total_page;
  }
  $outStr .='<div id="page_nav">';
  if($block > 1){
    $prev = $first - 1;
    $outStr .= '<a href="sj43list2.php?page=1">[ó��]</a>' .
               '<a href="sj43list2.php?page=' . $prev . '">[����' . $pagenum . '��]</a>';
  }
  
  for($pagelink = $first+1; $pagelink <= $list; $pagelink++){
    if($pagelink == $page)
      $outStr .= '<span id="page_color">[' . $pagelink . ']</span>';
    else
      $outStr .= '<a href="sj43list.php?page=' . $pagelink . '">[' . $pagelink . ']</a>';
  }
  if($block < $total_block){$next = $last + 1;
    $outStr .= '<a href="sj43list2.php?page=' . $next . '">[����' . $pagenum . '��]</a>' .
               '<a href="sj43list2.php?page=' . $total_page . '">[������]</a>';
  }
  
  
  if($page > 1){
    $go_page = $page - 1;
    $outStr .= '<a href="sj43list2.php?page=' . $go_page . '">[����������]</a>';
  }
  if($total_page > $page){
    $go_page = $page + 1;
    $outStr .= '<a href="sj43list2.php?page=' . $go_page . '">[����������]</a>';
  }
  $outStr .='</div>';
  
  $title = '���� ����';
  $outString = $outStr;
  
  include __DIR__ . '/../templates/sj43layout.html.php';
?>