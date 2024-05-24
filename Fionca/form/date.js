        function calculateAge() {
            const dob = document.getElementById('candidate_dob').value;
            const dobDate = new Date(dob);
            const now = new Date();
            let age = now.getFullYear() - dobDate.getFullYear();
            const monthDiff = now.getMonth() - dobDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && now.getDate() < dobDate.getDate())) {
                age--;
            }
            document.getElementById('age').value = age;
        }
