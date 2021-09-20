pipeline {
    agent any

    stages {
        stage("test") {
            steps {
                  echo 'test'
             }
        }
    }
    
    post {  
         success {  
             mail bcc: '', body: "Project: ${env.JOB_NAME} <br>Build Number: ${env.BUILD_NUMBER} <br> Build Status: Succeed <br> Build URL: ${env.BUILD_URL}", cc: '', charset: 'UTF-8', from: '', mimeType: 'text/html', replyTo: '', subject: "Project: ${env.JOB_NAME} - Succeed, ", to: "apsyriodis@gmail.com";  
         }  
         failure {  
             mail bcc: '', body: "Project: ${env.JOB_NAME} <br>Build Number: ${env.BUILD_NUMBER} <br> Build Status: Failed <br> Build URL: ${env.BUILD_URL}", cc: '', charset: 'UTF-8', from: '', mimeType: 'text/html', replyTo: '', subject: "Project: ${env.JOB_NAME} - Failed, ", to: "apsyriodis@gmail.com";  
         }
     }  
} 
