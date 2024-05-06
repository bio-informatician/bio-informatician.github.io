<!DOCTYPE html>

<head>
<style>


.hr-line {
  max-width: 50%;
  margin: 40px auto;
  text-align: center;
}
.hr-line .hr-text {
  font-size: 20px;
  position: relative;
  border: 0;
  height: 1.5em;
}
.hr-line .hr-text:before {
  content: "";
  background: linear-gradient(to right, transparent, #b2b2b2, transparent);
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 1px;
}
.hr-line .hr-text:after {
  content: attr(data-content);
  position: relative;
  display: inline-block;
  color: black;
  padding: 0 0.5em;
  line-height: 1.5em;
  color: YELLOW;
  background-color: RED;
}

</style>
</head>

<body>
  <div class="hr-line">
    <hr class="hr-text" data-content="Technologiessssbbbb">
  </div>
</body>