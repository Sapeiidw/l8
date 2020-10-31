<?php
echo 
"
<script>
Swal.fire(
'".$data['title']."',
'".$data['message']."',
'".$data['type']."',
).then((result) => {
window.location.href = '".BASEPATH.$data['path']."/';
});
</script>
";