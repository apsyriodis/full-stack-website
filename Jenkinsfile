pipeline {
    agent any

    stages {
        stage("co") {
            steps {
                  sh "git checkout -b jenkistest"
             }
        }
        
        stage("rm") {
            steps {
                  sh "git rm test.index"
             }
        }
        
         stage("add") {
            steps {
                  sh "git add ."
             }
        }
        
         stage("commit") {
            steps {
                  sh "git commit -m 'Deleted test.index file'"
             }
        }
        
          stage("push") {
            steps {
                  sh "git push -u origin jenkinstest"
             }
        }
    }
} 
