<?php

function uploadFile($Img)   //$_FILES["Img"]

{
    if ($Img["error"] == 4) {
        $ImgName = "photos/dummy.jpg";
        $message = "No photo, but you can add it later";
    } else {
        $checkType = getimagesize($Img["tmp_name"]);
        $message = $checkType ? "Ok" : "Chose another type of you image";
    }

    if ($message == "Ok") {
        $ext = strtolower(pathinfo($Img["name"], PATHINFO_EXTENSION));
        $ImgName = uniqid("") . "." . $ext;

        $destination = "photos/{$ImgName}";
        move_uploaded_file($Img["tmp_name"], $destination);
    }

    return [$ImgName, $message];
}
