pipeline {
    agent any

    stages {
        stage("co") {
            steps {
                  sh "git checkout main"
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
                  sh "git commit -m 'Delete test.index file'"
             }
        }
        
          stage("push") {
            steps {
                  sh "git push -u origin main"
             }
        }
    }
} 
