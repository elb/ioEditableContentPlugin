/** frontend styles **/
.<?php echo $editableClassName ?> {
  background-color: #ffe;
}

.<?php echo $editableClassName ?>:hover {
  background-color: #ffd;
}

.<?php echo $editableClassName ?>:before {
  content: "[double-click to edit]";
  font-family: Arial, Helvetica, sans;
  font-size: 70%;
  color: #888;
  float: right;
  padding: .2em .2em 0 0;
}
