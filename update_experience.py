#!/usr/bin/env python3
"""
Script para atualizar dinamicamente os anos de experiência no README.md
Baseado no ano de início: 2012
"""

import re
from datetime import datetime

def calculate_years(start_year=2012):
    """Calcula os anos de experiência desde o ano de início"""
    current_year = datetime.now().year
    return current_year - start_year

def update_readme():
    """Atualiza o README.md substituindo o número atual pelos anos calculados"""
    years = calculate_years()
    
    with open('README.md', 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Atualiza o badge (Android Developer-X+ years experience)
    content = re.sub(
        r'Android%20Developer-\d+\+%20years',
        f'Android%20Developer-{years}+%20years',
        content
    )
    
    # Atualiza o texto na seção About Me (with over **X years**)
    content = re.sub(
        r'with over \*\*\d+ years\*\*',
        f'with over **{years} years**',
        content
    )
    
    with open('README.md', 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"✅ README atualizado! Anos de experiência: {years} anos")

if __name__ == '__main__':
    update_readme()
