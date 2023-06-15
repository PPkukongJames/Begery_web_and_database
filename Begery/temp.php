<!-- <table>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <?php while($row_2=$result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $temp['bookName']; ?></td>
                    <td><?php echo $temp['amount']; ?></td>
                    <td>$
                        <?php 
                            $d = $temp['promotion'];
                            if($d==0){
                                $d=1;
                            }else{
                                $d=1-($d*0.01);
                            }
                            $total += $temp['bookPrice']*$row['amount']*$d;
                            echo $temp['bookPrice']*$row['amount']*$d;
                            if($temp['promotion']!=0) {
                                echo '(ลด'.$temp['promotion'].'%)';
                            }
                        ?>
                    </td>
                </tr>
                <?php } ?>
                <tr class="total">
                    <td colspan="2">Total</td>
                    <td><?php $total ?></td>
                </tr>
            </table>    -->