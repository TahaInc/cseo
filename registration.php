<?php
        $PrimaryParentName=$_POST['PostPrimaryParentName'];
        $SecondaryParentName=$_POST['PostSecondaryParentName'];
		$PrimaryEmail=$_POST['PostPrimaryEmail'];
        $SecondaryEmail=$_POST['PostSecondaryEmail'];
        $PrimaryPhone=$_POST['PostPrimaryPhone'];
        $SecondaryPhone=$_POST['PostSecondaryPhone'];
        $Address=$_POST['PostAddress'];
        $ChildName=$_POST['PostChildName'];
        $ChildBirth=$_POST['PostChildBirth'];
        $ChildAllergies=$_POST['PostChildAllergies'];
        $ChildSchool=$_POST['PostChildSchool'];
        $ChildLevel=$_POST['PostChildLevel'];
        $UniformSize=$_POST['PostUniformSize'];
        $PreferedPositions=$_POST['PostPreferedPositions'];
        $Competitive=$_POST['PostCompetitive'];

		$to='taha.rhidouani@gmail.com';
		$subject= 'Nouvelle inscription pour le CSEO';
		$message="CONTACT INFORMATION"."\n"."Primary parent's name: ".$PrimaryParentName."\n"."Primary parent's email: ".$PrimaryEmail."\n"."Primary parent's phone number: ".$PrimaryPhone."\n\n"."Secondary parent's name: ".$SecondaryParentName."\n"."Secondary parent's email: ".$SecondaryEmail."\n"."Secondary parent's phone number: ".$SecondaryPhone."\n\n"."Address: ".$Address."\n\n"."CHILD INFORMATION"."\n"."Child name: ".$ChildName."\n"."Child's date of birth: ".$ChildBirth."\n"."Allergies: ".$ChildAllergies."\n"."Child's school: ".$ChildSchool."\n"."Child's level of experience: ".$ChildLevel."\n"."Uniform size: ".$UniformSize."\n"."Prefered positions: ".$PreferedPositions."\n"."Section: ".$Competitive;
        
        mail($to, $subject, $message);

        $confirmation_subject="Welcome to CSEO";
        $confirmation_message="You have successfully registered ".$ChildName.". We can't wait to see you on the field!"."\n\n"."This is a automatic email. Please don't answer back.";

        mail($PrimaryParentName, $confirmation_subject, $confirmation_message);
?>