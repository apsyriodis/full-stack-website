pipeline {
    agent any

    stages {
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
