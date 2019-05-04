<?php
class pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}

	

	function pageList($curpage, $pages)
	{
		$page_list="";
			if(($curpage!=1)&&($curpage))
			{
				$page_list.='<li class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=1\" title=\"Trang đầu\">Đầu</a></li>";
			}
			if(($curpage-1)>0)
			{

				$page_list.='<li class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\" title=\"Về trang trước\">"."<i class=\"fa fa-angle-left\"></i>"."</a></li>";
			}
			/*if($curpage>2)
				$page_list.="...";*/
				
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.='<li class="div_trang active">'."<span title='Trang ".$i."'>".$i."</span></li>";
					}
					else
					{
						$page_list.='<li class="div_trang">'."<a href ='".$_SERVER['PHP_SELF']."?page=".$i."' title='Trang ".$i."'>".$i."</a></li>";
					}
				}

		/*	if(($curpage+2)<$pages)
				$page_list.="...";*/

			if(($curpage+1)<=$pages)
			{
				$page_list.='<li class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\" title=\"Đến trang sau\">"."<i class=\"fa fa-angle-right\"></i>"."</a></li>";
				$page_list.='<li class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".$pages."\" title=\"Đến trang cuối\">Cuối</a></li>";
			}
			return $page_list;
	}

	function nextPrev($curpage,$pages)//chỉ hiển thị 2 nút Truoc và Sau
		{
			$next_prev="";
			if(($curpage-1)<=0)
			{
				$next_prev.="Về trang trước";
			}
			else
			{
				$next_prev.="<li><a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\">Về trang trước</a></li>";
			}
			$next_prev.=" | ";
			if(($curpage+1)>$pages)
			{
				$next_prev.="Đến trang sau";
			}
			else
			{
				$next_prev.="<li><a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\">Đến trang sau</a></li>";
			}
			return $next_prev;
		}

		function next_Prev_id($ID,$current_pages,$total_pages){

   		$listPage= "";
   		if ($current_pages>1 && $total_pages >1) {
			$listPage.= '<li><a href="'.$_SERVER['PHP_SELF'].'?id='.$ID.'&page='.($current_pages-1).'">Prev</li>';
		}
		//vong for giua 
		for ($i = 1; $i <= $total_pages ; $i++) {
			if ($i == $current_pages) {
				$listPage.='<li class="active"><span>'.$i.'</span></li>';
			}else {
				$listPage.='<li><a href="'.$_SERVER['PHP_SELF'].'?id='.$ID.'&page='.$i.'">'.$i.'</a></li>';
			}
		}
		//phim next 
		if ($current_pages <$total_pages && $total_pages>1) {
			$listPage.='<li><a href="'.$_SERVER['PHP_SELF'].'?id='.$ID.'&page='.($current_pages+1).'">Next</a></li>';
		}
		return $listPage;
   }

   function next_Prev_idName($ID,$current_pages,$total_pages,$name){

   		$listPage= "";
   		if ($current_pages>1 && $total_pages >1) {
			$listPage.= '<li><a href="'.$_SERVER['PHP_SELF'].'?name='.$name.'&id='.$ID.'&page='.($current_pages-1).'">Prev</li>';
		}
		//vong for giua 
		for ($i = 1; $i <= $total_pages ; $i++) {
			if ($i == $current_pages) {
				$listPage.='<li class="active"><span>'.$i.'</span></li>';
			}else {
				$listPage.='<li><a href="'.$_SERVER['PHP_SELF'].'?name='.$name.'&id='.$ID.'&page='.$i.'">'.$i.'</a></li>';
			}
		}
		//phim next 
		if ($current_pages <$total_pages && $total_pages>1) {
			$listPage.='<li><a href="'.$_SERVER['PHP_SELF'].'?name='.$name.'&id='.$ID.'&page='.($current_pages+1).'">Next</a></li>';
		}
		return $listPage;
   }
}
?>