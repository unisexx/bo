<h3>บันทึก โครงการ [ผู้ตรวจราชการ]</h3>
<div id="search">
<div id="searchBox">
  <select name="select" id="select" class="mustChoose">
    <option>-- เลือกปีงบประมาณ --</option>
    <option>2555</option>
    <option>2554</option>
  </select>
  <select name="select3" id="select3" class="mustChoose">
    <option>-- เลือกรายชื่อโครงการ --</option>
  </select>
  <br />
  <select name="select2" id="select2" class="mustChoose">
    <option>-- เลือกเขต --</option>
  </select>
  <select name="select5" id="select5">
    <option>-- เลือกจังหวัดทั้งหมด --</option>
  </select>
  <select name="select6" id="select6">
    <option>-- เลือกรอบทั้งหมด --</option>
    <option>รอบที่ 1</option>
    <option>รอบที่ 2</option>
    <option>รอบที่ 3</option>
    <option>รอบที่ 4</option>
  </select>
  <select name="select7" id="select7">
    <option>-- เลือกหัวข้อทั้งหมด --</option>
    <option>Project Review</option>
  </select>
  <input type="submit" name="button9" id="button9" title="ค้นหา" value=" " class="btn_search" />
</div>
</div>

<div id="btnBox"><input type="button" title="เพิ่มรายการ" value=" " onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn_add"/></div>

<div id="paging" class="paginationEMP">
<span class="nextprev">&laquo;previous</span>
<span class="current">1</span>
<span><a href="javascript:;">2</a></span>
<span><a href="javascript:;">3</a></span>
<span><a href="javascript:;">4</a></span>
<span><a href="javascript:;">next&raquo;</a></span>        
</div>

<table class="tblist">
<tr>
  <th align="left">ลำดับ</th>
  <th align="left">ชื่อโครงการ</th>
  <th align="left">หัวข้อ</th>
  <th align="left">รอบที่</th>
  <th align="left">จังหวัด</th>
  <th align="left">เขต</th>
  <th align="left">ปี พ.ศ.</th>
  </tr>
<tr class="odd cursor" onclick="window.location='<?=basename($_SERVER['PHP_SELF'])?>?act=view'">
  <td>1</td>
  <td nowrap="nowrap">โครงการส่งเสริมและพัฒนาศักยภาพของครอบครัว (ศูนย์พัฒนาครอบครัวในชุมชน)</td>
  <td>Project Review</td>
  <td>1</td>
  <td>นนทบุรี</td>
  <td>เขตที่ 1</td>
  <td>2554</td>
  </tr>
<tr>
  <td>2</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr class="odd">
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td>4</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr class="odd">
  <td>5</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
</table>

<div id="paging" class="paginationEMP">
<span class="nextprev">&laquo;previous</span>
<span class="current">1</span>
<span><a href="javascript:;">2</a></span>
<span><a href="javascript:;">3</a></span>
<span><a href="javascript:;">4</a></span>
<span><a href="javascript:;">next&raquo;</a></span>        
</div>