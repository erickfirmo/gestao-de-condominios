<div class="panel">
      <div class="panel-heading">
         <h3 class="panel-title">Calendar</h3>
      </div>
      <div class="panel-content">
         <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
               <div class="calendar--events">
                  <h4 class="h4">Draggable Events</h4>
                  <div class="fc-events">
                     <div class="fc-event label-green ui-draggable ui-draggable-handle" style="border-color: rgb(0, 147, 120);">Party</div>
                     <div class="fc-event label-orange ui-draggable ui-draggable-handle" style="border-color: rgb(225, 97, 35);">Lunch</div>
                     <div class="fc-event label-blue ui-draggable ui-draggable-handle" style="border-color: rgb(43, 179, 192);">Meeting</div>
                     <div class="fc-event label-red ui-draggable ui-draggable-handle" style="border-color: rgb(255, 64, 64);">Event</div>
                  </div>
                  <label class="form-check"> <input type="checkbox" name="is_removeable" value="1" class="form-check-input"> <span class="form-check-label">Remove After Drop</span> </label> 
                  <hr>
                  <h4 class="h4">Create Event</h4>
                  <ul class="calendar--event__colors">
                     <li class="label-green active"></li>
                     <li class="label-orange"></li>
                     <li class="label-blue"></li>
                     <li class="label-red"></li>
                     <li class="label-black"></li>
                     <li class="label-gray"></li>
                  </ul>
                  <form action="#" class="mt-4 pt-1"> <input type="text" class="form-control" placeholder="Event Title..." required=""> <button type="submit" class="btn btn-danger btn-rounded mt-3">Add Event</button> </form>
               </div>
            </div>
            <div class="col-lg-9">
               <div id="calendarApp" class="calendar--app fc fc-unthemed fc-ltr">
                  <div class="fc-toolbar fc-header-toolbar">
                     <div class="fc-left"></div>
                     <div class="fc-right"><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button><button type="button" class="fc-basicDay-button fc-button fc-state-default fc-corner-left fc-corner-right">day</button><button type="button" class="fc-basicWeek-button fc-button fc-state-default fc-corner-left fc-corner-right">week</button><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-active">month</button></div>
                     <div class="fc-center">
                        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left fc-corner-right" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-left fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button>
                        <h2>April 2020</h2>
                     </div>
                     <div class="fc-clear"></div>
                  </div>
                  <div class="fc-view-container" style="">
                     <div class="fc-view fc-month-view fc-basic-view" style="">
                        <table class="">
                           <thead class="fc-head">
                              <tr>
                                 <td class="fc-head-container fc-widget-header">
                                    <div class="fc-row fc-widget-header">
                                       <table class="">
                                          <thead>
                                             <tr>
                                                <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                             </tr>
                                          </thead>
                                       </table>
                                    </div>
                                 </td>
                              </tr>
                           </thead>
                           <tbody class="fc-body">
                              <tr>
                                 <td class="fc-widget-content">
                                    <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 382px;">
                                       <div class="fc-day-grid fc-unselectable">
                                          <div class="fc-row fc-week fc-widget-content" style="height: 63px;">
                                             <div class="fc-bg">
                                                <table class="">
                                                   <tbody>
                                                      <tr>
                                                         <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2020-03-29"></td>
                                                         <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2020-03-30"></td>
                                                         <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2020-03-31"></td>
                                                         <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-04-01"></td>
                                                         <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-04-02"></td>
                                                         <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-04-03"></td>
                                                         <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-04-04"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="fc-content-skeleton">
                                                <table>
                                                   <thead>
                                                      <tr>
                                                         <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2020-03-29"><span class="fc-day-number">29</span></td>
                                                         <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2020-03-30"><span class="fc-day-number">30</span></td>
                                                         <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2020-03-31"><span class="fc-day-number">31</span></td>
                                                         <td class="fc-day-top fc-wed fc-past" data-date="2020-04-01"><span class="fc-day-number">1</span></td>
                                                         <td class="fc-day-top fc-thu fc-past" data-date="2020-04-02"><span class="fc-day-number">2</span></td>
                                                         <td class="fc-day-top fc-fri fc-past" data-date="2020-04-03"><span class="fc-day-number">3</span></td>
                                                         <td class="fc-day-top fc-sat fc-past" data-date="2020-04-04"><span class="fc-day-number">4</span></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="fc-row fc-week fc-widget-content" style="height: 63px;">
                                             <div class="fc-bg">
                                                <table class="">
                                                   <tbody>
                                                      <tr>
                                                         <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-04-05"></td>
                                                         <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-04-06"></td>
                                                         <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-04-07"></td>
                                                         <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-04-08"></td>
                                                         <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-04-09"></td>
                                                         <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-04-10"></td>
                                                         <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-04-11"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="fc-content-skeleton">
                                                <table>
                                                   <thead>
                                                      <tr>
                                                         <td class="fc-day-top fc-sun fc-past" data-date="2020-04-05"><span class="fc-day-number">5</span></td>
                                                         <td class="fc-day-top fc-mon fc-past" data-date="2020-04-06"><span class="fc-day-number">6</span></td>
                                                         <td class="fc-day-top fc-tue fc-past" data-date="2020-04-07"><span class="fc-day-number">7</span></td>
                                                         <td class="fc-day-top fc-wed fc-past" data-date="2020-04-08"><span class="fc-day-number">8</span></td>
                                                         <td class="fc-day-top fc-thu fc-past" data-date="2020-04-09"><span class="fc-day-number">9</span></td>
                                                         <td class="fc-day-top fc-fri fc-past" data-date="2020-04-10"><span class="fc-day-number">10</span></td>
                                                         <td class="fc-day-top fc-sat fc-past" data-date="2020-04-11"><span class="fc-day-number">11</span></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="fc-row fc-week fc-widget-content" style="height: 63px;">
                                             <div class="fc-bg">
                                                <table class="">
                                                   <tbody>
                                                      <tr>
                                                         <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-04-12"></td>
                                                         <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-04-13"></td>
                                                         <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-04-14"></td>
                                                         <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-04-15"></td>
                                                         <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-04-16"></td>
                                                         <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-04-17"></td>
                                                         <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-04-18"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="fc-content-skeleton">
                                                <table>
                                                   <thead>
                                                      <tr>
                                                         <td class="fc-day-top fc-sun fc-past" data-date="2020-04-12"><span class="fc-day-number">12</span></td>
                                                         <td class="fc-day-top fc-mon fc-past" data-date="2020-04-13"><span class="fc-day-number">13</span></td>
                                                         <td class="fc-day-top fc-tue fc-past" data-date="2020-04-14"><span class="fc-day-number">14</span></td>
                                                         <td class="fc-day-top fc-wed fc-past" data-date="2020-04-15"><span class="fc-day-number">15</span></td>
                                                         <td class="fc-day-top fc-thu fc-past" data-date="2020-04-16"><span class="fc-day-number">16</span></td>
                                                         <td class="fc-day-top fc-fri fc-past" data-date="2020-04-17"><span class="fc-day-number">17</span></td>
                                                         <td class="fc-day-top fc-sat fc-past" data-date="2020-04-18"><span class="fc-day-number">18</span></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="fc-row fc-week fc-widget-content" style="height: 63px;">
                                             <div class="fc-bg">
                                                <table class="">
                                                   <tbody>
                                                      <tr>
                                                         <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-04-19"></td>
                                                         <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-04-20"></td>
                                                         <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-04-21"></td>
                                                         <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-04-22"></td>
                                                         <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-04-23"></td>
                                                         <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-04-24"></td>
                                                         <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-04-25"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="fc-content-skeleton">
                                                <table>
                                                   <thead>
                                                      <tr>
                                                         <td class="fc-day-top fc-sun fc-past" data-date="2020-04-19"><span class="fc-day-number">19</span></td>
                                                         <td class="fc-day-top fc-mon fc-past" data-date="2020-04-20"><span class="fc-day-number">20</span></td>
                                                         <td class="fc-day-top fc-tue fc-past" data-date="2020-04-21"><span class="fc-day-number">21</span></td>
                                                         <td class="fc-day-top fc-wed fc-past" data-date="2020-04-22"><span class="fc-day-number">22</span></td>
                                                         <td class="fc-day-top fc-thu fc-past" data-date="2020-04-23"><span class="fc-day-number">23</span></td>
                                                         <td class="fc-day-top fc-fri fc-past" data-date="2020-04-24"><span class="fc-day-number">24</span></td>
                                                         <td class="fc-day-top fc-sat fc-past" data-date="2020-04-25"><span class="fc-day-number">25</span></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="fc-row fc-week fc-widget-content" style="height: 63px;">
                                             <div class="fc-bg">
                                                <table class="">
                                                   <tbody>
                                                      <tr>
                                                         <td class="fc-day fc-widget-content fc-sun fc-today " data-date="2020-04-26"></td>
                                                         <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2020-04-27"></td>
                                                         <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2020-04-28"></td>
                                                         <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-04-29"></td>
                                                         <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-04-30"></td>
                                                         <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-05-01"></td>
                                                         <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-05-02"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="fc-content-skeleton">
                                                <table>
                                                   <thead>
                                                      <tr>
                                                         <td class="fc-day-top fc-sun fc-today " data-date="2020-04-26"><span class="fc-day-number">26</span></td>
                                                         <td class="fc-day-top fc-mon fc-future" data-date="2020-04-27"><span class="fc-day-number">27</span></td>
                                                         <td class="fc-day-top fc-tue fc-future" data-date="2020-04-28"><span class="fc-day-number">28</span></td>
                                                         <td class="fc-day-top fc-wed fc-future" data-date="2020-04-29"><span class="fc-day-number">29</span></td>
                                                         <td class="fc-day-top fc-thu fc-future" data-date="2020-04-30"><span class="fc-day-number">30</span></td>
                                                         <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-05-01"><span class="fc-day-number">1</span></td>
                                                         <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-05-02"><span class="fc-day-number">2</span></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="fc-row fc-week fc-widget-content" style="height: 67px;">
                                             <div class="fc-bg">
                                                <table class="">
                                                   <tbody>
                                                      <tr>
                                                         <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2020-05-03"></td>
                                                         <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2020-05-04"></td>
                                                         <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2020-05-05"></td>
                                                         <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-05-06"></td>
                                                         <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-05-07"></td>
                                                         <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-05-08"></td>
                                                         <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-05-09"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="fc-content-skeleton">
                                                <table>
                                                   <thead>
                                                      <tr>
                                                         <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2020-05-03"><span class="fc-day-number">3</span></td>
                                                         <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2020-05-04"><span class="fc-day-number">4</span></td>
                                                         <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2020-05-05"><span class="fc-day-number">5</span></td>
                                                         <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-05-06"><span class="fc-day-number">6</span></td>
                                                         <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-05-07"><span class="fc-day-number">7</span></td>
                                                         <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-05-08"><span class="fc-day-number">8</span></td>
                                                         <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-05-09"><span class="fc-day-number">9</span></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



   