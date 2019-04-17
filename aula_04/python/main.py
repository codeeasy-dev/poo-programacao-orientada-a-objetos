from Log import Log

if __name__ == '__main__':
    log = Log("info.log")

    log.write_log("SUCCESS: O seu log foi escrito")
    print(log.get_log())
