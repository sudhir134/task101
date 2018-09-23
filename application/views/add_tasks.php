
    <div class="task-page" ng-controller="TaskController">
      <h2> Add Task</h2>
      <div class="form" >
        <form role="form">
          <div class="question-group" ng-repeat="Q in Questions track by $mailQindex">
            <div class="form-group" >
              <input type="text" placeholder="How do you feel today" ng-model="Q.questionText">
              <select ng-model="Q.SelectedAnsTypes" ng-change="changeAnsType()" ng-options="value as value.Name for (key, value) in Q.AnsTypes" class="form-control">
              </select>
            </div>

            <div class="form-group">
              <label for="pwd">Your Answers:</label>

               <input ng-if="Q.SelectedAnsTypes.fieldType=='text'" placeholder="Enter your answer" ng-repeat="i in Q.SelectedAnsTypes.totalFields | range" type="text" class="form-control" ng-model="Q.SelectedAnsTypes.Answer">

               <textarea ng-if="Q.SelectedAnsTypes.fieldType=='textarea'" placeholder="Enter your answer" ng-repeat="i in Q.SelectedAnsTypes.totalFields | range" type="text" class="form-control" ng-model="Q.SelectedAnsTypes.Answer"></textarea>

              <div class="sub-question-group">
                <label for="pwd">Sub questions:</label>
                 <div class="sub-questions" ng-repeat="SudQ in Q.subQuestions track by $index">
                    <div class="form-group" >
                      <input type="text" placeholder="How do you feel today" ng-model="SudQ.questionText">
                      <select ng-model="Q.subQuestions[$index].SudQ.SelectedAnsTypes" ng-change="changeAnsType()" ng-options="value as value.Name for (key, value) in SudQ.AnsTypes" class="form-control">
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="pwd">Your Answer:</label>
                       <input ng-if="Q.subQuestions[$index].SudQ.SelectedAnsTypes.fieldType=='text'" placeholder="Enter your answer" ng-repeat="i in Q.subQuestions[$index].SudQ.SelectedAnsTypes.totalFields | range" type="text" class="form-control" ng-model="Q.subQuestions[$index].SudQ.SelectedAnsTypes.Answer">

                       <textarea ng-if="Q.subQuestions[$index].SudQ.SelectedAnsTypes.fieldType=='textarea'" placeholder="Enter your answer" ng-repeat="i in Q.subQuestions[$index].SudQ.SelectedAnsTypes.totalFields | range" type="text" class="form-control" ng-model="Q.subQuestions[$index].SudQ.SelectedAnsTypes.Answer"></textarea>
                    </div>
                  </div>
                </div>
               <div class="subq-div" ng-if="Q.SelectedAnsTypes.fieldType=='text'">
                 <a ng-click="addSubq($index)" href=""> Add new subquestion</a> 
               </div>
          </div>
          
          <button type="submit" class="btn btn-default" ng-click="submitTasks()" style="width:60px">Add</button>
        </form>
      </div>
    </div>