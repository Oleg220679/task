<?php

       function number_to_text($a) {switch ($a) {

               case 1:

                print "1.first";

                break;

                case 2:

                        print "2.second";

                        break;

                case 3:

                        print "3.third";

                        break;

                case 4:

                        print "4.fours";

                        break;

                case 5:

                        print "5.fifth";

                        break;
                default:

                        print "default";

}
}
      $a = number_to_text(2);

      print $a;   
?>