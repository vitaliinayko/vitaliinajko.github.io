@app.route('/template', methods=['GET', 'POST'])
def template():
    if request.method == 'POST':
        return("Hello")
    return render_template('index.html')		
