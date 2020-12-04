<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js')}}"></script>

<table>
         <tr><td class="class_head">New Time Entry</td><br></tr>
         <tr><td class="class_head">Record your activity using the timer below</td></tr>
         <tr>
            <td class="class_normal">Duration*<br><br>
            
                    <div  style="display:none">
                        <input type="number" id="num" class="form-control" min="0">
                        <select id="measure" name="measure" class="form-control">
                            <option value="0">Select Unit</option>
                            <option value="s">Seconds</option>
                            <option value="m">Minutes</option>
                            <option value="h">Hours</option>
                        </select>
                    </div>
                    <!--<div class="buttons-wrapper">-->
                        
                
                    <!--</div>-->
                
                <div id="timer" class="col-12">
                  <div class="clock-wrapper">
                      <span class="hours">00</span>
                      <span class="dots">:</span>
                      <span class="minutes">00</span>
                      <span class="dots">:</span>
                      <span class="seconds">00</span>
                  </div>
                  <button class="btn" id="start-cronometer">Start Stopwatch</button>
                </div>
                <div class="buttons-wrapper" style="display:none">
                  <button class="btn" id="resume-timer">Resume Timer</button>
                  <button class="btn" id="stop-timer">Stop Timer</button>
                  <button class="btn" id="reset-timer">Reset Timer</button>
                </div>
            </div>
</td>
            <td class="class_normal">Units*<br><br>
            <select class="selectbox" name="units" id="units">
                <?php
                for ($i=1;$i<=100;$i++)
                {
                ?>
                <option value="<?php echo $i?>"><?php echo $i?></option>
                <?php
                }
                ?>
           </select>
           </td>
            <td class="class_normal">WIP<br><br><input type="text" name="" id="" class="textbox"></td>
         </tr>
         <tr style="height:10px"><td></td></tr>
         <tr>
            <td class="class_normal">Fee Earner*<br><br><input type="text" name="fee_earner" id="fee_earner" class="textbox"></td>
            <td class="class_normal">Activity*<br><br><input type="text" name="activity" id="activity"  class="textbox"></td>
         </tr>
         <tr style="height:10px"><td></td></tr>
         <tr>
            <td class="class_normal">Matter<br><input type="text" name="matter" id="matter" class="textbox"></td>
           
         </tr>
         <tr style="height:10px"><td></td></tr>
         <tr>
            <td class="class_normal" colspan="2">Notes / Description*<br><textarea  name="notes" id="notes" class="textarea"></textarea></td>
        </tr>
        <tr style="height:10px"><td></td></tr>
        <tr><td><input type="button" class="button" value="POST TIME ENTRY"></td></tr>
         
</table>
