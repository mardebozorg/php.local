<?php

require "a.php";

// یعنی حتما باید فایل باید باشد و به آن نیاز داردو خطا میدهد

require_once "a.php";

// اگه قبلا اضافه شده باشد دیگر محاسبه نمیشود یعنی در کل یکبار اضافه میشود

include_once "func.php";

echo "hello";

