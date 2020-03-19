def find_short(s):
    a = s.split()
    a = sorted(a,key=len)
    l = len(a[0])
    return l # l: shortest word length
