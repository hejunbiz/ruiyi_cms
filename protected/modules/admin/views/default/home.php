<?php $this->renderPartial('include/header');?>
<table class="content_list">
	<thead>
		<tr >
			<td >备忘录(记录未完成或待办事宜)<span id="notebookMessage"></span></td>
		</tr>
	</thead>
	<tr>
		<td>
			<textarea name="notebook" cols="80" rows="6" id="notebook" onblur="updateNotebook()" ><?php ?></textarea>
		</td>
	</tr>
</table>
<table class="content_list">
	<thead>
		<tr >
			<td colspan="2" class="tbTitle">系统信息</td>
		</tr>
	</thead>
	<tr>
		<td width="100" >程序版本</td>
		<td ><?php echo $this->version; ?></td>
	</tr>
	<tr>
		<td >操作系统软件</td>
		<td ><?php echo $server['serverOs']; ?> - <?php echo $server['serverSoft']; ?></td>
	</tr>
	<tr>
		<td >数据库及大小</td>
		<td ><?php echo $server['mysqlVersion']; ?>(<?php echo $server['dbsize']?>)</td>
	</tr>
	<tr>
		<td >上传许可</td>
		<td ><?php echo $server['fileupload']?></td>
	</tr>
	<tr>
		<td >主机名</td>
		<td ><?php echo $server['serverUri']?></td>
	</tr>
	<tr>
		<td >当前使用内存</td>
		<td ><?php echo $server['excuteUseMemory']?></td>
	</tr>
	<tr>
		<td >PHP版本:</td>
		<td ><?php echo $server['phpVersion']; ?></td>
	</tr>
</table>
<?php $this->renderPartial('include/footer');?>